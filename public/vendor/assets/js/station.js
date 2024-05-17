const firebaseConfig = {
    apiKey: "AIzaSyDdQrkGN6prSgUhXkIcuzV91jkBY7ncf6Q",
    authDomain: "pertaminanre-c2d3e.firebaseapp.com",
    databaseURL: "https://pertaminanre-c2d3e-default-rtdb.firebaseio.com",
    projectId: "pertaminanre-c2d3e",
    storageBucket: "pertaminanre-c2d3e.appspot.com",
    messagingSenderId: "27244440449",
    appId: "1:27244440449:web:420d7e77ca96f3290c1680"
  };
  firebase.initializeApp(firebaseConfig);
  var db = firebase.database();

  var elements = document.getElementsByClassName("dateshow");
  for (var i = 0; i < elements.length; i++) {
      elements[i].textContent = '/Today';
  }
  getData(new Date().getTime() - (3600*24*1000), new Date().getTime(), true);

  $("#datepicker").daterangepicker({
    "opens": "left",
    ranges: {
    "Today": [moment(), moment()],
    "Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
    "Last 7 Days": [moment().subtract(6, "days"), moment()],
    "Last 30 Days": [moment().subtract(29, "days"), moment()],
    "This Month": [moment().startOf("month"), moment().endOf("month")]
    }
  }, function(start, end, label) {
    console.log('New date range selected: ' + start + ' to ' + end + ' (predefined range: ' + label + ')');
    // document.getElementsByClassName("dateshow").textContent = '/' + label;
    for (var i = 0; i < elements.length; i++) {
        elements[i].textContent = '/' + label;
    }
    getData(Number(start), Number(end), false)
  });

  function getData(Xmin, Xmax, realtime){
    var ref = db.ref('station2/data');
    ref.orderByKey().startAt(String(parseInt(Xmin/1000))).endAt(String(parseInt(Xmax/1000))).on('value', handleSuccess, handleError);

    function handleError(error){
      console.log(error);
    };

    function handleSuccess(snapshot) {
      const key = snapshot.key;
      const data = snapshot.val();
      // console.log(key);
      // console.log(data);
      const mapData = (property) => Object.keys(data).map((timestamp) => ({ x: parseInt(timestamp) * 1000, y: data[timestamp][property]}));

      const EI = mapData("EI");
      const REI = mapData("REI");

      const VAB = mapData("VA");
      const VBC = mapData("VB");
      const VCA = mapData("VC");

      const CA = mapData("CA");
      const CB = mapData("CB");
      const CC = mapData("CC");

      const WT = mapData("WT");
      const VART = mapData("VART");
      const VAT = mapData("VAT");

      const CosPhi = mapData("CosPhi");
      const Freq = mapData("Freq");

      energyData = [{name: "Active Energy", data: EI}, {name: "Reactive Energy", data: REI}];
      voltageData = [{name: "Voltage A", data: VAB}, {name: "Voltage B", data: VBC}, {name: "Voltage C", data: VCA}];
      currentData = [{name: "Current A", data: CA}, {name: "Current B", data: CB}, {name: "Current C", data: CC}];
      powerData = [{name: "Active Power", data: WT}, {name: "Reactive Power", data: VART}, {name: "Apparent Power", data: VAT}];
      cosphiData = [{name: "CosPhi", data: CosPhi}];
      FreqData = [{name: "CosPhi", data: Freq}];

      publishChart("#Energy", energyData, Xmin, Xmax, realtime);
      publishChart("#Voltage", voltageData, Xmin, Xmax);
      publishChart("#Current", currentData, Xmin, Xmax);
      publishChart("#Power", powerData, Xmin, Xmax);
      publishChart("#ChartCosPhi", cosphiData, Xmin, Xmax);
      publishChart("#ChartFrequency", FreqData, Xmin, Xmax);
    }
  }

  function publishChart(idName, data, Xmin, Xmax, realtime){
    if(realtime){
      Xmin = null;
      Xmax = null;
    }
    var options = {
      series: data,
      chart: {
        height: 350,
        type: 'area',
        toolbar: {show: false},
      },
      colors: ["#4154f1", "#2eca6a", "#ff771d"],
      // markers: {
      //   size: 4,
      // },
      fill: {
        type: "gradient",
        gradient: {
          shadeIntensity: 1,
          opacityFrom: 0.3,
          opacityTo: 0.6,
          stops: [0, 90, 100]
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 2
      },
      yaxis: {
        min: (min) => {return min-(0.5*min)},
        max: (max) => {return max+(0.5*max)}
      },
      xaxis: {
        type: 'datetime',
        labels: {
          datetimeUTC: false
        },
        min: Xmin || undefined,
        max: Xmax|| undefined
      },
      tooltip: {
        x: {
          format: 'yyyy-MM-dd HH:mm'
        },
      }
    }
    var chart = new ApexCharts(document.querySelector(idName), options);
    chart.render();
    chart.updateOptions(options)
  }

  // Function to set the content for a specific parameter
  function setParameterValue(parameterName) {
    const entry = tableData.find(entry => entry.parameter === parameterName);
    if (entry) {
      document.getElementById(parameterName).textContent = entry.value;
    }
  }

  function updateTableData() {
    var ref = db.ref('station2/data');

    ref.orderByKey().limitToLast(1).on('child_added', (snapshot) => {
      const data = snapshot.val();
      updateEnergyUsage(data.EI, 10)

      // Loop through each parameter in the data
      Object.keys(data).forEach(parameter => {
        const element = document.getElementById(parameter);
        if (element) {
          // Update the value in the table cell
          element.textContent = data[parameter];
        }
      });
    });
  }

  // Assume this function is triggered when you get new data
  function updateEnergyUsage(newKWh, percentageIncrease) {
    // Select the elements
    const energy = document.getElementById('energyUsage');
    const kWhElement = energy.querySelector('h6');
    energy.querySelector('.text-success').textContent = `${percentageIncrease}%`;
    energy.querySelector('.text-muted').textContent = 'increase';

    const price = document.getElementById('price');
    const priceElement = price.querySelector('h6');
    price.querySelector('.text-success').textContent = `${percentageIncrease}%`;
    price.querySelector('.text-muted').textContent = 'increase';

    newPrice = Math.round(newKWh*1699.53);

    const formattedPrice = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR',maximumFractionDigits: 0}).format(newPrice);

    // Update the content
    kWhElement.textContent = `${newKWh} kWh`;
    priceElement.textContent = formattedPrice.replace(/\s/g, '');
  }


  updateTableData();
  setInterval(updateTableData, 5000);
