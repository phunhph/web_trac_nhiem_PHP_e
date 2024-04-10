document.getElementById("kythi").onchange = function () {
  var id = document.getElementById("kythi").value;
  getmonthi(id);
};

// getdata monthi
function getmonthi(id) {
  var id = {
    id: id.toString(),
  };
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "index.php?controller=getmonthi", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var response = xhr.responseText;
        var date = JSON.parse(response);
        rendermonthi(date);
        addAllEvents();
        envenmon();
      } else {
        console.error("Lỗi:", xhr.status);
      }
    }
  };

  xhr.send(JSON.stringify(id));
}

// render monthi
function rendermonthi(date) {
  var html = "";
  var ops = ` <option value="...">...</option>`;
  if (date.length >= 1) {
    date.forEach((element) => {
      html += "<tr>";
      html +=
        '<td style="text-align:left; padding:0.5em 1em;">' +
        element.mamodun +
        "</td>";
      html +=
        '<td style="text-align:left; padding:0.5em 1em;">' +
        element.tenmodun +
        "</td>";
      html +=
        '<td style="text-align:left; padding:0.5em 1em;">' +
        element.batdau +
        "</td>";
      html +=
        '<td style="text-align:left; padding:0.5em 1em;">' +
        element.ketthuc +
        "</td>";
      html += "</tr>";
      ops += `<option value="${element.mamodun}">
	  ${element.tenmodun}
  </option>`;
    });
    document.getElementById("crud_monthi").innerHTML = `
    <form method="post" id="suamodun">
    <div class="row">
        <div class="mb-12 col-lg-12 col-md-12 col-sm-12 csbd">
            <label class="form-label h5 fw-bolder">Mã môn thi</label>
            <input type='text' name='mmt' id='mmt'
                class="form-control text-dark border-dark-subtle" value="">
        </div>
    </div>
    <div class="row">
        <div class="mb-12 col-lg-12 col-md-12 col-sm-12 csbd">
            <label class="form-label h5 fw-bolder">Tên môn thi</label>
            <input type='text' name='tenmt' id='tenmt'
                class="form-control text-dark border-dark-subtle" value="">
        </div>
    </div>
    <div class="row">
        <div class="mb-12 col-lg-12 col-md-12 col-sm-12 csbd">
            <label class="form-label h5 fw-bolder">Bắt đầu</label>
            <input type='datetime-local' name='tkt' id='tkt'
                class="form-control text-dark border-dark-subtle" value="">
        </div>
    </div>
    <div class="row">
        <div class="mb-12 col-lg-12 col-md-12 col-sm-12 csbd">
            <label class="form-label h5 fw-bolder">Kết thúc</label>
            <input type='datetime-local' name='tkt2' id='tkt2'
                class="form-control text-dark border-dark-subtle" value="">
        </div>
    </div>
</form>
<div class="row">
    <div class="mb-3 col-lg-3 col-md-3 col-sm-3">
        <img id="add1" src="assets/image/add.png" width="33" height="33"
            title="Thêm mới" style="margin-top:1em; cursor:pointer;">
        <img id="edit1" src="assets/image/edit.ico" width="33" height="33"
            title="Sửa" style="margin-left:1em;margin-top:1em; cursor:pointer;">
        <img id="delete1" src="assets/image/delete.png" width="33" height="33"
            title="Xóa" style="margin-left:1em;margin-top:1em; cursor:pointer;">
    </div>
</div>
`;
  } else {
    var html = ``;
    ops = ` <option value="...">...</option>`;
    document.getElementById("crud_monthi").innerHTML = "";
  }

  document.getElementById("monthi").innerHTML = html;
  document.getElementById("monthi_ops").innerHTML = ops;
}

// getDate nội dung thi
document.getElementById("monthi_ops").onchange = function () {
  var id = document.getElementById("monthi_ops").value;
  getnoidungthi(id);
};
function getnoidungthi(id) {
  var id = {
    id: id.toString(),
  };

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "index.php?controller=getnoidungthi", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var response = xhr.responseText;
        var date = JSON.parse(response);
        rendernoidungthi(date);
        addAllEvents();
        var element = document.getElementById("monthi_showw");
        if (element) {
          element.scrollIntoView({ behavior: "smooth" });
        }
      } else {
        console.error("Lỗi:", xhr.status);
      }
    }
  };

  xhr.send(JSON.stringify(id));
}

// render nội dung thi

function rendernoidungthi(date) {
  var html = "";
  date.forEach((element, i) => {
    html += `<tr>
					<td style='text-align:left; padding:0.5em 1em;'>
						${element.mabode}
					</td>
					<td style='text-align:left; padding:0.5em 1em;'>
						${element.tenbode}
					</td>
					<td style='text-align:left; padding:0.5em 1em;'>
						${element.tenmodun}
					</td>
					<td style='text-align:left; padding:0.5em 1em;'>
						${element.tenkythi}
					</td>
				</tr>`;
  });

  document.getElementById(
    "crud_noidungthi"
  ).innerHTML = `<form method="post" id="suamodun">

  <div class="row">
      <div class="mb-12 col-lg-12 col-md-12 col-sm-12 csbd">
          <label class="form-label h5 fw-bolder">Mã nội dung thi</label>
          <input type='text' name='mmt1' id='mmt1' class="form-control text-dark border-dark-subtle" value="">
      </div>
  </div>

  <div class="row">
      <div class="mb-12 col-lg-12 col-md-12 col-sm-12 csbd">
          <label class="form-label h5 fw-bolder">Tên nội dung thi</label>
          <input type='text' name='tenmt1' id='tenmt1' class="form-control text-dark border-dark-subtle" value="">
      </div>
  </div>
  <div class="row">
      <div class="mb-12 col-lg-12 col-md-12 col-sm-12 csbd">
          <label class="form-label h5 fw-bolder">Tên môn thi</label>
          <input type='text' name='tkt1' id='tkt1' class="form-control text-dark border-dark-subtle" value="">
      </div>
  </div>
</form>
<div class="row">
  <div class="mb-3 col-lg-3 col-md-3 col-sm-3">
      <img id="add2" src="assets/image/add.png" width="33" height="33" title="Thêm mới" style="margin-top:1em; cursor:pointer;">
      <img id="edit2" src="assets/image/edit.ico" width="33" height="33" title="Sửa" style="margin-left:1em;margin-top:1em; cursor:pointer;">
      <img id="delete2" src="assets/image/delete.png" width="33" height="33" title="Xóa" style="margin-left:1em;margin-top:1em; cursor:pointer;">
  </div>
</div>`;
  document.getElementById("noidungthi").innerHTML = html;
}
addAllEvents();
function showSuccessMessage(mes) {
  var successMessage = document.createElement("div");
  successMessage.textContent = mes;
  successMessage.classList.add("success-message");
  document.body.appendChild(successMessage);

  // Ẩn thông báo sau 3 giây
  setTimeout(function () {
    document.body.removeChild(successMessage);
  }, 3000);
}
function envenmon() {
  //kỳ thi
  $("#add1").click(function (e) {
    var a, b, c, d;
    a = $("input[id='mmt']").val();
    b = $("input[id='tenmt']").val();
    c = $("input[id='tkt']").val();
    d = $("input[id='tkt2']").val();
    if (a === "" || b === "" || c === "" || d === "")
      alert("Không được để trống dữ liệu!");
    else if (confirm("Bạn chắc chắn thêm môn thi này?")) {
      var data = {
        id: $("#mmt").val(),
        name: $("#tenmt").val(),
        tgbd: $("#tkt").val(),
        tgkt: $("#tkt2").val(),
        id_kt: $("#kythi").val(),
      };
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "index.php?controller=addmonthi", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            getmonthi(data.id_kt);
            var mes = "Thêm mới môn thi thành công";
            showSuccessMessage(mes);
          } else {
            console.error("Lỗi:", xhr.status);
          }
        }
      };

      xhr.send(JSON.stringify(data));
    }
  });
  $("#edit1").click(function (e) {
    var a, b, c, d;
    a = $("input[id='mmt']").val();
    b = $("input[id='tenmt']").val();
    c = $("input[id='tkt']").val();
    d = $("input[id='tkt2']").val();
    if (a === "" || b === "" || c === "" || d === "")
      alert("Không được để trống dữ liệu!");
    else if (confirm("Bạn có chắc chắn sửa đổi?")) {
      var data = {
        id: $("#mmt").val(),
        name: $("#tenmt").val(),
        tgbd: $("#tkt").val(),
        tgkt: $("#tkt2").val(),
        id_kt: $("#kythi").val(),
      };
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "index.php?controller=fixmonthi", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            getmonthi(data.id_kt);
            var mes = "Cập nhật môn thi thành công";
            showSuccessMessage(mes);
          } else {
            console.error("Lỗi:", xhr.status);
          }
        }
      };

      xhr.send(JSON.stringify(data));
    }
  });
  $("#delete1").click(function (e) {
    var a;
    a = $("input[id='mmt']").val();
    if (a === "") alert("Không được để trống mã môn thi!");
    else if (confirm("Bạn có chắc chắn xóa môn thi này?")) {
      var data = {
        id: $("#mmt").val(),
        id_kt: $("#kythi").val(),
      };
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "index.php?controller=deletemonthi", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            getmonthi(data.id_kt);
            var mes = "Xoá môn thi thành công";
            showSuccessMessage(mes);
          } else {
            console.error("Lỗi:", xhr.status);
          }
        }
      };

      xhr.send(JSON.stringify(data));
    }
  });
}
function addAllEvents() {
  // JavaScript Document
  $(document).ready(function (e) {
    $(".ttb1 tr").click(function (e) {
      $("input[id='mkt']").val($(this).children("td:eq(0)").text());
      $("input[id='tenkt']").val($(this).children("td:eq(1)").text());
      $("input[id='tgbd']").val($(this).children("td:eq(2)").text());
      $("input[id='tgkt']").val($(this).children("td:eq(3)").text());
    });
    $(".ttb2 tr").click(function (e) {
      $("input[id='mmt']").val($(this).children("td:eq(0)").text());
      $("input[id='tenmt']").val($(this).children("td:eq(1)").text());
      $("input[id='tkt']").val($(this).children("td:eq(2)").text());
      $("input[id='tkt2']").val($(this).children("td:eq(3)").text());
      var element = document.getElementById("list_monthi");
      if (element) {
        element.scrollIntoView({ behavior: "smooth" });
      }
    });
    $(".table12 tr").click(function (e) {
      $("input[id='mmt1']").val($(this).children("td:eq(0)").text());
      $("input[id='tenmt1']").val($(this).children("td:eq(1)").text());
      $("input[id='tkt1']").val($(this).children("td:eq(2)").text());
      $("input[id='tkt11']").val($(this).children("td:eq(3)").text());
      var element = document.getElementById("list_noidungthi");
      if (element) {
        element.scrollIntoView({ behavior: "smooth" });
      }
    });

    //Môn thi
    $("#add2").click(function (e) {
      //Tiếp tục từ đây
      var a, b, c;
      a = $("input[id='mmt1']").val();
      b = $("input[id='tenmt1']").val();
      c = $("input[id='tkt1']").val();
      if (a === "" || b === "" || c === "")
        alert("Không được để trống dữ liệu!");
      else if (confirm("Thêm nội dung này?")) {
        var data = {
          id: $("#mmt1").val(),
          name: $("#tenmt1").val(),
          monthi: $("#tkt1").val(),
          mamon: $("#monthi_ops").val(),
        };
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php?controller=addnoidungthi", true);
        xhr.setRequestHeader(
          "Content-Type",
          "application/x-www-form-urlencoded"
        );

        xhr.onreadystatechange = function () {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              getnoidungthi(data.mamon);
              var mes = "Thêm mới nội dung thi thành công";
              showSuccessMessage(mes);
            } else {
              console.error("Lỗi:", xhr.status);
            }
          }
        };

        xhr.send(JSON.stringify(data));
      }
    });
    $("#edit2").click(function (e) {
      var a, b, c;
      a = $("input[id='mmt1']").val();
      b = $("input[id='tenmt1']").val();
      c = $("input[id='tkt1']").val();
      if (a === "" || b === "" || c === "")
        alert("Không được để trống dữ liệu!");
      else if (confirm("Cập nhật nội dung này?")) {
        var data = {
          id: $("#mmt1").val(),
          name: $("#tenmt1").val(),
          monthi: $("#tkt1").val(),
          mamon: $("#monthi_ops").val(),
        };
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php?controller=fixnoidungthi", true);
        xhr.setRequestHeader(
          "Content-Type",
          "application/x-www-form-urlencoded"
        );

        xhr.onreadystatechange = function () {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              getnoidungthi(data.mamon);
              var mes = "Cập nhật nội dung thi thành công";
              showSuccessMessage(mes);
            } else {
              console.error("Lỗi:", xhr.status);
            }
          }
        };

        xhr.send(JSON.stringify(data));
      }
    });
    $("#delete2").click(function (e) {
      var a;
      a = $("input[id='mmt1']").val();
      if (a === "") alert("Không được để trống dữ liệu!");
      else if (confirm("Bạn chắc chắn xóa nội dung thi này?")) {
        var data = {
          id: $("#mmt1").val(),
          name: $("#tenmt1").val(),
          monthi: $("#tkt1").val(),
          mamon: $("#monthi_ops").val(),
        };
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "index.php?controller=deletenoidungthi", true);
        xhr.setRequestHeader(
          "Content-Type",
          "application/x-www-form-urlencoded"
        );

        xhr.onreadystatechange = function () {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              getnoidungthi(data.mamon);
              var mes = "Xoá nội dung thi thành công";
              showSuccessMessage(mes);
            } else {
              console.error("Lỗi:", xhr.status);
            }
          }
        };

        xhr.send(JSON.stringify(data));
      }
    });
  });
}
