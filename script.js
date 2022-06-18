function calculate_fee() {
  var driverAge = document.getElementById("age").value;
  var vehicleCc = document.getElementById("vehicle").value;
  var rentDays = document.getElementById("days").value;

  if (driverAge >= 18 && driverAge <= 22) {
    var ageFee = 0.00042;
  } else if (driverAge > 22 && driverAge <= 30) {
    var ageFee = 0.00036;
  } else if (driverAge > 30) {
    var ageFee = 0.00023;
  }

  var insuranceFee = driverAge * ageFee * vehicleCc;

  if (vehicleCc <= 1600) {
    if (rentDays <= 5) {
      var dayFee = 15.42;
    } else if (rentDays >= 6 && rentDays <= 10) {
      var dayFee = 14.62;
    } else {
      var dayFee = 13.15;
    }
  } else if (vehicleCc >= 1601 && vehicleCc <= 2000) {
    if (rentDays <= 5) {
      var dayFee = 16.82;
    } else if (rentDays >= 6 && rentDays <= 10) {
      var dayFee = 15.76;
    } else {
      var dayFee = 14.8;
    }
  } else {
    if (rentDays <= 5) {
      var dayFee = 18.22;
    } else if (rentDays >= 6 && rentDays <= 10) {
      var dayFee = 17.1;
    } else {
      var dayFee = 16.2;
    }
  }

  var rentFee = rentDays * dayFee;

  var totalFee = insuranceFee + rentFee;

  var finalFee = Math.round(totalFee);

  alert("Your Rental Fee is: " + finalFee + "€");
}
