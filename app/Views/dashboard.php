<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Pasien</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
</head>

<body>
  <div class="container m-5">
    <div class="row align-items-center mb-3">
      <div class="col">
        <h1>Daftar Pasien</h1>
      </div>
      <div class="col-auto">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pasienModal">
          Tambah Pasien
        </button>
      </div>
    </div>

    <!-- Modal input -->
    <div class="modal fade" id="pasienModal" tabindex="-1" aria-labelledby="pasienModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pasienModalLabel">Tambah Data Pasien</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formPasien">
              <div class="mb-3">
                <label for="no_rm" class="form-label">Nomor Rekam Medis</label>
                <input type="text" class="form-control" id="no_rm" name="no_rm" required>
              </div>
              <div class="mb-3">
                <label for="tanggal_kunjung" class="form-label">Tanggal Kunjungan</label>
                <input type="date" class="form-control" id="tanggal_kunjung" name="tanggal_kunjung" required>
              </div>
              <div class="mb-3">
                <label for="keluhan" class="form-label">Keluhan</label>
                <textarea class="form-control" id="keluhan" name="keluhan" rows="2" required></textarea>
              </div>
              <div class="mb-3">
                <label for="diagnosa" class="form-label">Diagnosa</label>
                <textarea class="form-control" id="diagnosa" name="diagnosa" rows="2" required></textarea>
              </div>
              <div class="mb-3">
                <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit</label>
                <textarea class="form-control" id="riwayat_penyakit" name="riwayat_penyakit" rows="2"></textarea>
              </div>
              <div class="mb-3">
                <label for="dokter_pasien" class="form-label">Dokter</label>
                <input type="text" class="form-control" id="dokter_pasien" name="dokter_pasien" required>
              </div>
              <div class="mb-3">
                <label for="poli" class="form-label">Poli</label>
                <input type="text" class="form-control" id="poli" name="poli" required>
              </div>
              <div class="mb-3">
                <label for="tipe_pesien" class="form-label">Tipe Pasien</label>
                <select class="form-select" id="tipe_pesien" name="tipe_pesien" required>
                  <option value="Rawat Jalan">Rawat Jalan</option>
                  <option value="Rawat Inap">Rawat Inap</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk">
              </div>
              <div class="mb-3">
                <label for="tanggal_keluar" class="form-label">Tanggal Keluar</label>
                <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar">
              </div>
              <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Edit -->
    <div class="modal fade" id="editPasienModal" tabindex="-1" aria-labelledby="editPasienModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editPasienModalLabel">Edit Data Pasien</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="editFormPasien">
              <input type="hidden" id="edit_id" name="id">
              <div class="mb-3">
                <label for="edit_no_rm" class="form-label">Nomor Rekam Medis</label>
                <input type="text" class="form-control" id="edit_no_rm" name="no_rm" required>
              </div>
              <div class="mb-3">
                <label for="edit_tanggal_kunjung" class="form-label">Tanggal Kunjungan</label>
                <input type="date" class="form-control" id="edit_tanggal_kunjung" name="tanggal_kunjung" required>
              </div>
              <div class="mb-3">
                <label for="edit_keluhan" class="form-label">Keluhan</label>
                <textarea class="form-control" id="edit_keluhan" name="keluhan" rows="2" required></textarea>
              </div>
              <div class="mb-3">
                <label for="edit_diagnosa" class="form-label">Diagnosa</label>
                <textarea class="form-control" id="edit_diagnosa" name="diagnosa" rows="2" required></textarea>
              </div>
              <div class="mb-3">
                <label for="edit_riwayat_penyakit" class="form-label">Riwayat Penyakit</label>
                <textarea class="form-control" id="edit_riwayat_penyakit" name="riwayat_penyakit" rows="2"></textarea>
              </div>
              <div class="mb-3">
                <label for="edit_dokter_pasien" class="form-label">Dokter</label>
                <input type="text" class="form-control" id="edit_dokter_pasien" name="dokter_pasien" required>
              </div>
              <div class="mb-3">
                <label for="edit_poli" class="form-label">Poli</label>
                <input type="text" class="form-control" id="edit_poli" name="poli" required>
              </div>
              <div class="mb-3">
                <label for="edit_tipe_pesien" class="form-label">Tipe Pasien</label>
                <select class="form-select" id="edit_tipe_pesien" name="tipe_pesien" required>
                  <option value="Rawat Jalan">Rawat Jalan</option>
                  <option value="Rawat Inap">Rawat Inap</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="edit_tanggal_masuk" class="form-label">Tanggal Masuk</label>
                <input type="date" class="form-control" id="edit_tanggal_masuk" name="tanggal_masuk">
              </div>
              <div class="mb-3">
                <label for="edit_tanggal_keluar" class="form-label">Tanggal Keluar</label>
                <input type="date" class="form-control" id="edit_tanggal_keluar" name="tanggal_keluar">
              </div>
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <table id="example" class="table table-bordered">
      <thead>
        <tr>
          <th>NO</th>
          <th>NO REKAM MEDIS</th>
          <th>TANGGAL KUNJUNG</th>
          <th>KELUHAN</th>
          <th>DIAGNOSA</th>
          <th>RIWAYAT PENYAKIT</th>
          <th>DOKTER PASIEN</th>
          <th>POLI</th>
          <th>TIPE PASIEN</th>
          <th>TANGGAL MASUK</th>
          <th>TANGGAL KELUAR</th>
          <th>AKSI</th>
        </tr>
        <tr>
          <th><input type="text" class="form-control filter" data-column="0"></th>
          <th><input type="text" class="form-control filter" data-column="1"></th>
          <th><input type="text" class="form-control filter" data-column="2"></th>
          <th><input type="text" class="form-control filter" data-column="3"></th>
          <th><input type="text" class="form-control filter" data-column="4"></th>
          <th><input type="text" class="form-control filter" data-column="5"></th>
          <th><input type="text" class="form-control filter" data-column="6"></th>
          <th><input type="text" class="form-control filter" data-column="7"></th>
          <th><input type="text" class="form-control filter" data-column="8"></th>
          <th><input type="text" class="form-control filter" data-column="9"></th>
          <th><input type="text" class="form-control filter" data-column="10"></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($pasien)) : ?>
          <?php foreach ($pasien as $p) : ?>
            <tr>
              <td><?= esc($p['id']); ?></td>
              <td><?= esc($p['no_rm']); ?></td>
              <td><?= esc($p['tanggal_kunjung']); ?></td>
              <td><?= esc($p['keluhan']); ?></td>
              <td><?= esc($p['diagnosa']); ?></td>
              <td><?= esc($p['riwayat_penyakit']); ?></td>
              <td><?= esc($p['dokter_pasien']); ?></td>
              <td><?= esc($p['poli']); ?></td>
              <td><?= esc($p['tipe_pesien']); ?></td>
              <td><?= esc($p['tanggal_masuk']); ?></td>
              <td><?= esc($p['tanggal_keluar']); ?></td>
              <td>
                <button class="btn btn-warning btn-sm edit-btn" data-id="<?= $p['id']; ?>"
                  data-no_rm="<?= $p['no_rm']; ?>"
                  data-tanggal_kunjung="<?= $p['tanggal_kunjung']; ?>"
                  data-keluhan="<?= $p['keluhan']; ?>"
                  data-diagnosa="<?= $p['diagnosa']; ?>"
                  data-riwayat_penyakit="<?= $p['riwayat_penyakit']; ?>"
                  data-dokter_pasien="<?= $p['dokter_pasien']; ?>"
                  data-poli="<?= $p['poli']; ?>"
                  data-tipe_pesien="<?= $p['tipe_pesien']; ?>"
                  data-tanggal_masuk="<?= $p['tanggal_masuk']; ?>"
                  data-tanggal_keluar="<?= $p['tanggal_keluar']; ?>">
                  Edit
                </button>
                <button class="btn btn-danger btn-sm delete-btn" data-id="<?= $p['id']; ?>">Hapus</button>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="12" class="text-center">Tidak ada data pasien.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      var table = $('#example').DataTable({
        "paging": true,
        "lengthMenu": [5, 10, 25, 50, 100],
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "language": {
          "search": "Cari:",
          "lengthMenu": "Tampilkan _MENU_ data per halaman"
        }
      });

      $('.filter').on('keyup change', function() {
        var column = $(this).data('column');
        table.column(column).search(this.value).draw();
      });
      $("#formPasien").submit(function(e) {
        e.preventDefault(); // Mencegah reload

        var url = "<?= base_url('/create') ?>";

        console.log("Mengirim data...");

        $.ajax({
          url: url,
          type: "POST",
          data: $(this).serialize(),
          dataType: "json",
          success: function(response) {
            console.log("Response:", response);
            alert(response.status);
            $("#pasienModal").modal("hide");
            location.reload();
          },
          error: function(xhr, status, error) {
            console.error("Error:", xhr.responseText);
            alert("Terjadi kesalahan: " + xhr.responseText);
          }
        });
      });

      // Gunakan event delegation untuk tombol edit
      $(document).on("click", ".edit-btn", function() {
        $("#edit_id").val($(this).data("id"));
        $("#edit_no_rm").val($(this).data("no_rm"));
        $("#edit_tanggal_kunjung").val($(this).data("tanggal_kunjung"));
        $("#edit_keluhan").val($(this).data("keluhan"));
        $("#edit_diagnosa").val($(this).data("diagnosa"));
        $("#edit_riwayat_penyakit").val($(this).data("riwayat_penyakit"));
        $("#edit_dokter_pasien").val($(this).data("dokter_pasien"));
        $("#edit_poli").val($(this).data("poli"));
        $("#edit_tipe_pesien").val($(this).data("tipe_pesien"));
        $("#edit_tanggal_masuk").val($(this).data("tanggal_masuk"));
        $("#edit_tanggal_keluar").val($(this).data("tanggal_keluar"));

        $("#editPasienModal").modal("show");
      });

      $("#editFormPasien").submit(function(e) {
        e.preventDefault();
        var url = "<?= base_url('/update') ?>" + "/" + $("#edit_id").val();

        $.ajax({
          url: url,
          type: "POST",
          data: $(this).serialize(),
          dataType: "json",
          success: function(response) {
            alert(response.status);
            $("#editPasienModal").modal("hide");
            location.reload();
          },
          error: function(xhr) {
            alert("Terjadi kesalahan: " + xhr.responseText);
          }
        });
      });

      // Gunakan event delegation untuk tombol delete
      $(document).on("click", ".delete-btn", function() {
        var pasienId = $(this).data("id");
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
          $.ajax({
            url: "<?= base_url('/delete') ?>/" + pasienId,
            type: "POST",
            data: {
              _method: "DELETE",
              id: pasienId
            },
            dataType: "json",
            success: function(response) {
              alert(response.status);
              location.reload();
            },
            error: function(xhr) {
              alert("Terjadi kesalahan: " + xhr.responseText);
            }
          });
        }
      });

    });
  </script>
</body>

</html>