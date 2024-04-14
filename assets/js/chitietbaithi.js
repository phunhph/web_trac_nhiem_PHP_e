$("#kythi").change(function (e) {
  (id = document.getElementById("kythi").value), getmothi(id);
  getmathisinh(id);
});

function getmothi(data) {
  var id = {
    id: data,
  };
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "index.php?controller=getmonthi", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var response = xhr.responseText;
        var data = JSON.parse(response);
        rendermonthi(data);
      } else {
        console.error("Lỗi:", xhr.status);
      }
    }
  };

  xhr.send(JSON.stringify(id));
}

function getmathisinh(id) {
  var id = {
    id: id,
  };
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "index.php?controller=getsbd", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var response = xhr.responseText;
        var data = JSON.parse(response);
        renderSBD(data);
      } else {
        console.error("Lỗi:", xhr.status);
      }
    }
  };

  xhr.send(JSON.stringify(id));
}

function renderSBD(data) {
  var html = `<option value="all">- - - Mã thí sinh - - -</option>`;
  if (data.length >= 1) {
    data.forEach((element) => {
      html += `<option value="${element}">${element}</option>`;
    });
  }
  document.getElementById("masbd").innerHTML = html;
}

function rendermonthi(data) {
  var html = `<option value="all">--Chọn môn thi--</option>`;
  if (data.length >= 1) {
    data.forEach((element) => {
      html += `<option value="${element.mamodun}">${element.tenmodun}</option>`;
    });
  }
  document.getElementById("monthi").innerHTML = html;
}

$("#masbd").change(function (e) {
  id = document.getElementById("masbd").value;
  mamodun = document.getElementById("monthi").value;
  var id = {
    id: id,
    mamodun: mamodun,
  };
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "index.php?controller=getketqua", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var response = xhr.responseText;

        var data = JSON.parse(response);
        renderthongthiketqua(data);
        getthongthibaithi();
      } else {
        console.error("Lỗi:", xhr.status);
      }
    }
  };

  xhr.send(JSON.stringify(id));
});

function renderthongthiketqua(data) {
  var html = ``;
  if (data.length > 0) {
    html = ` <tr>
    <td>${document.getElementById("masbd").value}</td>
    <td>${data[0].hodem} ${data[0].ten}</td>
    <td>${data[0].thoigianthi}</td>
    <td>${data[0].thoigianketthuc}</td>
    <td class="text-center">${data[0].socaudung}</td>
    <td class="h5 text-danger fw-bold text-center">
    ${data[0].diem}/10</td> </tr>`;
  }
  document.getElementById("thong_tin").innerHTML = html;
}
function getthongthibaithi() {
  id = document.getElementById("masbd").value;
  mamodun = document.getElementById("monthi").value;
  var id = {
    id: id,
    mamodun: mamodun,
  };
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "index.php?controller=getthongthibaithi", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var response = xhr.responseText;

        var data = JSON.parse(response);
        renderbaithifull(data);
      } else {
        console.error("Lỗi:", xhr.status);
      }
    }
  };

  xhr.send(JSON.stringify(id));
}

function renderbaithifull(data) {
  var html = ``;
  var dem = 1;
  if (data.length > 0) {
    data.forEach((element) => {
      html += `<div class="card-body ">
      <p class="h5 ml-0 text-gray">
      ${element.stt}: <span class="text-dark">${element.cauhoi}</span>
      </p>

      <div class="table-responsive">
          <table class="table table-bordered" id="" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th class="text-primary ">Câu trả lời của bạn</th>
                      <th class="text-success">Câu trả lời đúng</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                       <td class="w-50">`;

      if (element.temp == element.padung) {
        switch (element.temp) {
          case "A":
            html += `<label>
            <input type="radio">
            ${element.temp}. ${element.paA}
            <img src='assets/image/approve.png'>
        </label> </td>`;
            break;
          case "B":
            html += `
            <label>
            <input type="radio">
            ${element.temp}. ${element.paB}
            <img src='assets/image/approve.png'>
        </label> </td>`;
            break;
          case "C":
            html += `
            <label>
            <input type="radio">
            ${element.temp}. ${element.paC}
            <img src='assets/image/approve.png'>
        </label> </td>`;
            break;
          case "D":
            html += `
            <label>
            <input type="radio">
            ${element.temp}. ${element.paD}
            <img src='assets/image/approve.png'>
        </label> </td>`;
            break;
        }
      } else if (element.temp == null) {
        html += `
        <label>
        Bạn không trả lời câu hỏi này
        </label></td>`;
      } else {
        switch (element.temp) {
          case "A":
            html += `<label>
            <input type="radio">
            ${element.temp}. ${element.paA}
            <img src='assets/image/false.png'>
        </label> </td>`;
            break;
          case "B":
            html += `
            <label>
            <input type="radio">
            ${element.temp}. ${element.paB}
            <img src='assets/image/false.png'>
        </label> </td>`;
            break;
          case "C":
            html += `
            <label>
            <input type="radio">
            ${element.temp}. ${element.paC}
            <img src='assets/image/false.png'>
        </label> </td>`;
            break;
          case "D":
            html += `
            <label>
            <input type="radio">
            ${element.temp}. ${element.paD}
            <img src='assets/image/false.png'>
        </label> </td>`;
            break;
        }
      }
      if (element.padung == "A") {
        html += `
         <td class="w-50">
            <label>
             <input type="radio" checked="">
                ${element.padung}. ${element.paA}
            </label>
        </td>
        `;
      }
      if (element.padung == "B") {
        html += ` <td class="w-50">
        <label>
         <input type="radio" checked="">
         ${element.padung}. ${element.paB}
        </label>
    </td>`;
      }
      if (element.padung == "C") {
        html += ` <td class="w-50">
        <label>
         <input type="radio" checked="">
         ${element.padung}. ${element.paC}
        </label>
    </td>`;
      }
      if (element.padung == "D") {
        html += ` <td class="w-50">
        <label>
         <input type="radio" checked="">
         ${element.padung}. ${element.paD}
        </label>
    </td>`;
      }
      html += `</tr>
      </tbody>
  </table>
</div>
</div>`;
    });
  }
  document.getElementById("chitietbailam").innerHTML = html;
}

function printContent() {
  var reponsve = document.body.innerHTML;
  var pr = document.getElementById("load").innerHTML;
  document.body.innerHTML = pr;
  window.print();
  document.body.innerHTML = reponsve;
}
