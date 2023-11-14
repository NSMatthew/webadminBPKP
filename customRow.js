document.getElementById("tambahBaris").addEventListener("click", function () {
  document.getElementById("barisBaru").style.display = "table-row";
});

function tambahRow() {
  // Ambil nilai-nilai dari input pada baris baru
  const namaBaru = document.getElementById("namaBaru").value;
  const idBaru = document.getElementById("idBaru").value;
  const emailBaru = document.getElementById("emailBaru").value;
  const statusUserBaru = document.getElementById("statusBaru").value;

  // Buat baris baru
  const table = document.getElementById("userTable").getElementsByTagName("tbody")[0];
  const newRow = table.insertRow(table.rows.length - 2); 

  // Hitung nomor urutan
  const rowCount = table.rows.length - 3; // Kurangi 2 karena baris terakhir adalah tombol tambah dan baris kosong

  // Buat sel dan tambahkan nilainya
  const cell1 = newRow.insertCell(0);
  const cell2 = newRow.insertCell(1);
  const cell3 = newRow.insertCell(2);
  const cell4 = newRow.insertCell(3);
  const cell5 = newRow.insertCell(4);
  const cell6 = newRow.insertCell(5);

  cell1.innerHTML = rowCount;
  cell2.innerHTML = namaBaru;
  cell3.innerHTML = idBaru;
  cell4.innerHTML = emailBaru;
  cell5.innerHTML = statusUserBaru;
  cell6.innerHTML = '<button class="btn btn-danger" onclick="deleteRow(this)"><font5>Delete</font5></button>';

  // Reset nilai-nilai input
  document.getElementById("namaBaru").value = "";
  document.getElementById("idBaru").value = "";
  document.getElementById("emailBaru").value = "";
  document.getElementById("statusBaru").value = "";

  // Sembunyikan baris baru
  document.getElementById("barisBaru").style.display = "none";
}

function deleteRow(button) {
  // Find the row that contains the clicked button
  const row = button.parentNode.parentNode;

  // Find the parent table's tbody
  const tbody = row.parentNode;

  // Delete the row from the tbody
  tbody.removeChild(row);
}
