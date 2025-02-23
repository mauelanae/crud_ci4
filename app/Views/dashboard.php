<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Pasien - CodeIgniter 4 & jQuery</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>

<body>

  <div class="container mt-5">
    <h2 class="text-center">CRUD Pasien - CodeIgniter 4 & jQuery</h2>

    <button class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#pasienModal">Tambah Pasien</button>

    <table id="example" class="table table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>No RM</th>
          <th>Tanggal Kunjung</th>
          <th>Keluhan</th>
          <th>Diagnosa</th>
          <th>Riwayat Penyakit</th>
          <th>Dokter</th>
          <th>Poli</th>
          <th>Tipe Pasien</th>
          <th>Tgl Masuk</th>
          <th>Tgl Keluar</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>

  <!-- Modal Tambah -->
  <div class="modal fade" id="pasienModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title"><i class="bi bi-person-plus"></i> Tambah Pasien</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <form id="formPasien">
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-credit-card"></i> No RM</label>
                <input type="text" name="no_rm" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-calendar"></i> Tanggal Kunjung</label>
                <input type="date" name="tanggal_kunjung" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-exclamation-triangle"></i> Keluhan</label>
                <input type="text" name="keluhan" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-clipboard-check"></i> Diagnosa</label>
                <input type="text" name="diagnosa" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-journal-medical"></i> Riwayat Penyakit</label>
                <input type="text" name="riwayat_penyakit" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-person-badge"></i> Dokter</label>
                <input type="text" name="dokter_pasien" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-hospital"></i> Poli</label>
                <input type="text" name="poli" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-person-lines-fill"></i> Tipe Pasien</label>
                <select name="tipe_pesien" class="form-select" required>
                  <option value="">Pilih...</option>
                  <option value="Rawat Jalan">Rawat Jalan</option>
                  <option value="Rawat Inap">Rawat Inap</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-door-open"></i> Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-door-closed"></i> Tanggal Keluar</label>
                <input type="date" name="tanggal_keluar" class="form-control">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Edit -->
  <div class="modal fade" id="editPasienModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title"><i class="bi bi-pencil-square"></i> Edit Pasien</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <form id="editFormPasien" action="/update" method="POST" data-id="">
          <div class="modal-body">
            <input type="hidden" name="id" id="edit_id">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-credit-card"></i> No RM</label>
                <input type="text" name="no_rm" id="edit_no_rm" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-calendar"></i> Tanggal Kunjung</label>
                <input type="date" name="tanggal_kunjung" id="edit_tanggal_kunjung" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-exclamation-triangle"></i> Keluhan</label>
                <input type="text" name="keluhan" id="edit_keluhan" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-clipboard-check"></i> Diagnosa</label>
                <input type="text" name="diagnosa" id="edit_diagnosa" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-journal-medical"></i> Riwayat Penyakit</label>
                <input type="text" name="riwayat_penyakit" id="edit_riwayat_penyakit" class="form-control">
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-person-badge"></i> Dokter</label>
                <input type="text" name="dokter_pasien" id="edit_dokter_pasien" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-hospital"></i> Poli</label>
                <input type="text" name="poli" id="edit_poli" class="form-control" required>
              </div>
              <div class="col-md-6">
                <label class="form-label"><i class="bi bi-person-lines-fill"></i> Tipe Pasien</label>
                <select name="tipe_pasien" id="edit_tipe_pasien" class="form-select" required>
                  <option value="">Pilih...</option>
                  <option value="Rawat Jalan">Rawat Jalan</option>
                  <option value="Rawat Inap">Rawat Inap</option>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-warning"><i class="bi bi-pencil"></i> Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      loadTable();
    });

    function loadTable() {
      $.get("/all", function(data) {
        if ($.fn.DataTable.isDataTable("#example")) {
          $("#example").DataTable().clear().destroy();
        }
        $("#example tbody").empty();

        $("#example").DataTable({
          data: data,
          columns: [{
              data: "id",
              defaultContent: "-"
            },
            {
              data: "no_rm",
              defaultContent: "-"
            },
            {
              data: "tanggal_kunjung",
              defaultContent: "-"
            },
            {
              data: "keluhan",
              defaultContent: "-"
            },
            {
              data: "diagnosa",
              defaultContent: "-"
            },
            {
              data: "riwayat_penyakit",
              defaultContent: "-"
            },
            {
              data: "dokter_pasien",
              defaultContent: "-"
            },
            {
              data: "poli",
              defaultContent: "-"
            },
            {
              data: "tipe_pasien",
              defaultContent: "-"
            },
            {
              data: "tanggal_masuk",
              defaultContent: "-"
            },
            {
              data: "tanggal_keluar",
              defaultContent: "-"
            },
            {
              data: null,
              render: function(data, type, row) {
                return `
              <button class="btn btn-warning btn-sm editBtn" data-id="${row.id}">Edit</button>
              <button class="btn btn-danger btn-sm deleteBtn" data-id="${row.id}">Hapus</button>
            `;
              }
            }
          ],
          paging: true,
          searching: true,
          ordering: true,
          info: true,
          lengthMenu: [5, 10, 25, 50],
          language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
            infoEmpty: "Tidak ada data yang tersedia",
            infoFiltered: "(disaring dari _MAX_ total data)",
            paginate: {
              first: "Pertama",
              last: "Terakhir",
              next: "Selanjutnya",
              previous: "Sebelumnya"
            }
          }
        });
      }).fail(function() {
        alert("Gagal memuat data.");
      });
    }

    // Tambah Data Pasien
    $("#formPasien").submit(function(e) {
      e.preventDefault();
      $.post("/store", $(this).serialize(), function(response) {
        console.log(response); // Debugging: Cek response dari server

        alert("Data berhasil ditambahkan!");
        $("#pasienModal").modal("hide");
        $("#formPasien")[0].reset();

        if (response && response.id) {
          let table = $("#example").DataTable();
          table.row.add({
            "id": response.id || "-",
            "no_rm": response.no_rm || "-",
            "tanggal_kunjung": response.tanggal_kunjung || "-",
            "keluhan": response.keluhan || "-",
            "diagnosa": response.diagnosa || "-",
            "riwayat_penyakit": response.riwayat_penyakit || "-",
            "dokter_pasien": response.dokter_pasien || "-",
            "poli": response.poli || "-",
            "tipe_pasien": response.tipe_pasien || "-",
            "tanggal_masuk": response.tanggal_masuk || "-",
            "tanggal_keluar": response.tanggal_keluar || "-",
            "action": `
                  <button class="btn btn-warning btn-sm editBtn" data-id="${response.id}">Edit</button>
                  <button class="btn btn-danger btn-sm deleteBtn" data-id="${response.id}">Hapus</button>
                `
          }).draw(false);
          loadTable();
        }
      }).fail(function() {
        alert("Gagal menambahkan data.");
      });
    });

    $(document).on("click", ".editBtn", function() {
      let id = $(this).data("id");
      $.get(`/edit/${id}`, function(data) {
        $("#edit_id").val(data.id);
        $("#edit_no_rm").val(data.no_rm);
        $("#edit_tanggal_kunjung").val(data.tanggal_kunjung);
        $("#edit_keluhan").val(data.keluhan);
        $("#edit_diagnosa").val(data.diagnosa);
        $("#edit_riwayat_penyakit").val(data.riwayat_penyakit);
        $("#edit_dokter_pasien").val(data.dokter_pasien);
        $("#edit_poli").val(data.poli);
        $("#edit_tipe_pasien").val(data.tipe_pasien);
        $("#edit_tanggal_masuk").val(data.tanggal_masuk);
        $("#edit_tanggal_keluar").val(data.tanggal_keluar);
        $("#editFormPasien").attr("data-id", data.id);
        $("#editPasienModal").modal("show");
      }).fail(function() {
        alert("Gagal mengambil data.");
      });
    });

    $("#editFormPasien").submit(function(e) {
      e.preventDefault();

      let formData = $(this).serialize();
      let id = $("#edit_id").val();

      $.ajax({
        url: "/update",
        type: "POST",
        data: formData,
        success: function(response) {
          alert("Data berhasil diperbarui!");
          $("#editPasienModal").modal("hide");

          let table = $("#example").DataTable();

          // Temukan baris berdasarkan ID pasien yang diedit
          let row = table.row(`[data-id="${id}"]`);

          if (row.length) {
            row.data([
              response.id,
              response.no_rm,
              response.tanggal_kunjung,
              response.keluhan,
              response.diagnosa,
              response.riwayat_penyakit,
              response.dokter_pasien,
              response.poli,
              response.tipe_pasien,
              response.tanggal_masuk,
              response.tanggal_keluar,
              `<button class="btn btn-primary editBtn" data-id="${response.id}">Edit</button>`
            ]).draw(false);
          }
          loadTable();
        },
        error: function() {
          alert("Gagal memperbarui data.");
        },
      });
    });

    // Hapus Data Pasien
    $(document).on("click", ".deleteBtn", function() {
      let id = $(this).data("id");
      if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
        $.ajax({
          url: `/delete/${id}`,
          type: "DELETE",
          success: function(response) {
            if (response.status === "deleted") {
              alert("Data berhasil dihapus!");
              let table = $("#example").DataTable();
              table.row($(`button[data-id='${id}']`).parents("tr")).remove().draw(false);
            } else {
              alert("Gagal menghapus data: " + response.message);
            }
          },
          error: function() {
            alert("Gagal menghapus data.");
          }
        });
      }
    });
  </script>

</body>

</html>