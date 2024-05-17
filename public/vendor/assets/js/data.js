const firebaseConfig = {
  apiKey: "AIzaSyCAl7QlqRJZ7bIxVkcyiyJvwIFeDJ_DSS4",
  authDomain: "ems-2a420.firebaseapp.com",
  databaseURL: "https://ems-2a420-default-rtdb.firebaseio.com",
  projectId: "ems-2a420",
  storageBucket: "ems-2a420.appspot.com",
  messagingSenderId: "290327111970",
  appId: "1:290327111970:web:96f970de35b93070fcdd7b",
  measurementId: "G-15CR0PCT4H"
};
firebase.initializeApp(firebaseConfig);
var db = firebase.database();

function getdata(year, month, day, room ){
  var x1 = year.toString()+'/'+month.toString()+'/'+day.toString()
  var x2 = year.toString()+'-'+month.toString()+'-'+day.toString()
  console.log(x2)
  console.log("getting data for " + x1 +' R'+ room.toString())
  const data = db.ref(x1 +'/room/R' + room.toString());
  data.on('value', handleSuccess, handleError);
  function handleError(error){
      console.log(error);
  };
  function handleSuccess(items){
    var theData = items.val();
    // console.log(Object.values(theData))

    var dynamicColors = function() {
      var r = Math.floor(Math.random() * 255);
      var g = Math.floor(Math.random() * 255);
      var b = Math.floor(Math.random() * 255);
      return "rgb(" + r + "," + g + "," + b + ")";
    };
    const rgb1 = dynamicColors()

    const mydata = [{
      name: room,
      data: Object.values(theData)
    }]

    var options = {
      series: mydata,
      chart: {
        height: 350,
        type: 'area',
        toolbar: {
          show: false
        },
      },
      colors: [rgb1, '#2eca6a', '#ff771d'],
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
        curve: 'straight',
        width: 5
      },
      xaxis: {
        type: 'datetime',
        labels: {
          datetimeUTC: false
        },
        min : new Date(x2 + " 00:00").getTime(),
      },
      tooltip: {
        x: {
          format: 'yyyy-MM-dd HH:mm'
        },
      }
    }
    var chart = new ApexCharts(document.querySelector("#R" + room.toString()), options);
    chart.render();
    document.getElementById("tgl" + room.toString()).innerHTML = '-'+x1;
  }
}

function myFunction() {
  var x = document.getElementById("myDate").value;
  console.log(x);
  const myArray = x.split("-");
  var year = parseInt(myArray[0]);
  var month = parseInt(myArray[1]);
  var day = parseInt(myArray[2]);

  for(let i=201; i<=214;i++){
    getdata(year, month, day, i);
  }
  
}
