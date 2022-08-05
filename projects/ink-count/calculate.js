function calculate() {

  let e50 = document.getElementById("e50").value;
  let e20 = document.getElementById("e20").value;
  let e10 = document.getElementById("e10").value;
  let e5 = document.getElementById("e5").value;
  let e2 = document.getElementById("e2").value;
  let e1 = document.getElementById("e1").value;
  let ep5 = document.getElementById("ep5").value;
  let ep2 = document.getElementById("ep2").value;
  let ep1 = document.getElementById("ep1").value;
  let epc5 = document.getElementById("epc5").value;
  let epc2 = document.getElementById("epc2").value;
  let epc1 = document.getElementById("epc1").value;

  e50 = e50*50;
  e20 = e20*20;
  e10 = e10*10;
  e5 = e5*5;
  e2 = e2*2;
  e1 = e1*1;
  ep5 = ep5*0.50;
  ep2 = ep2*0.20;
  ep1 = ep1*0.10;
  epc5 = epc5*0.05;
  epc2 = epc2*0.02;
  epc1 = epc1*0.01;

  document.getElementById("result").value = e50+e20+e10+e5+e2+e1+ep5+ep2+ep1+epc5+epc2+epc1;
}
