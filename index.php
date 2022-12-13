<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Boxicons -->

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Google Font -->

    <!-- Bootstrap -->
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
</head>

<body onload="startTime()">
    <div class="modal fade" id="add-item" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <form action="http://api-bazar.stevanandreas.com/api/bazar" method="post"> -->
                    <div class="mb-3">
                        <label for="nama">Nama Pembeli</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_menu">Nama Menu</label>
                        <select name="nama_menu" id="nama_menu" class="form-control" required>
                            <option value="">Pilih menu</option>
                            <option value="Banana Cheese">Banana Cheese</option>
                            <option value="Piesecok">Piesecok</option>
                            <option value="Pyudding">Pyudding</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control" required>
                    </div>
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="edit-item" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <form action="http://api-bazar.stevanandreas.com/api/bazar" method="post"> -->
                    <div class="mb-3">
                        <label for="nama">Nama Pembeli</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_menu">Nama Menu</label>
                        <select name="nama_menu" id="nama_menu" class="form-control" required>
                            <option value="">Pilih menu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="harga" class="form-control" required>
                    </div>
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
    <section class="d-flex">
        <div class="sidebar-wrapper">
            <nav class="sidebar shadow p-3 mb-5 bg-body rounded ">
                <header>
                    <div class="image-text">
                        <span class="image">
                            <img src="logo.jpeg" alt="">
                        </span>
                        <div class="text header-text">
                            <span class="name">Admin Bazar</span>
                            <span class="class">XI PPLG 1</span>
                        </div>
                    </div>

                    <i class='bx bx-chevron-right target toggle'></i>

                    <div class="menu-bar">
                        <div class="menu">
                            <ul class="menu-link">
                                <li class="nav-links">
                                    <i class="bi bi-clock icon"></i>
                                    <h5 id="clock"></h5>
                                </li>
                            </ul>
                            <ul class="menu-link">
                                <li class="nav-links">
                                    <a href="#">
                                        <i class='bx bx-home icon'></i>
                                        <span class="text nav-text">Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-link">
                                <li class="nav-links">
                                    <a href="#">
                                        <i class='bx bx-home icon'></i>
                                        <span class="text nav-text">Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="menu-link">
                                <li class="nav-links">
                                    <a href="#">
                                        <i class='bx bx-pie-chart-alt-2 icon'></i>
                                        <span class="text nav-text">Dashboard</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </header>
            </nav>
        </div>
        <div class="content-wrapper">
            <div class="container">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-4">
                            <h5 class="card-title">Data Penjualan Bazar</h5>
                            <h5>Total Penjualan : <strong>
                                    <div id="total"></div>
                                </strong></h5>
                        </div>
                        <table id="example" class="table" display style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nama Menu</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nama Menu</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Waktu</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <button class="add-button btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-item">
                        Tambah
                    </button>
                </div>
            </div>
        </div>
    </section>

    <script src="index.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        const table = $('#example').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "http://api-bazar.stevanandreas.com/api/bazar",
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'nama',
                    name: 'nama'
                },
                {
                    data: 'nama_menu',
                    name: 'nama_menu'
                },
                {
                    data: 'jumlah',
                    name: 'jumlah'
                },
                {
                    data: 'harga',
                    name: 'harga'
                },
                {
                    data: 'status',
                    name: 'status'
                },
                {
                    data: 'waktu',
                    name: 'waktu'
                },
                {
                    className: 'actions-control',
                    data: 'null',
                    defaultContent: '<a href="/admin/tambah-detail-buku/2" class="btn btn-primary"><i class="bi bi-file-earmark-plus"></i></a> <a href="/admin/edit-buku/2" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>'
                },
            ],
            createdRow: function(row, data, dataIndex) {
                // console.log(data);
                if (data.status == 1) {
                    $(row).addClass('table-success');
                }
            },
            columnDefs: [{
                render: function(data, type, row, meta) {
                    // console.log(row);
                    const html =
                        `<button class="btn btn-primary btn-sm rounded-0 update-item" type="button" data-toggle="tooltip" data-placement="top" title="Add" data-id="${row.id}"><i class="bi bi-table"></i></button>` +
                        `<button class="btn btn-success btn-sm rounded-0 edit-item" type="button" data-toggle="tooltip" data-placement="top" title="Edit" data-id="${row.id}"><i class="bi bi-pencil-square"></i></button>` +
                        `<button class="btn btn-danger btn-sm rounded-0 delete-item" type="button" data-placement="top" title="Delete" data-id="${row.id}"><i class="bi bi-trash"></i></button>`;

                    return html;
                },
                targets: [7]
            }, ],
            order: [],
            language: {
                search: "",
                searchPlaceholder: "Search"
            }
        });

        $.ajax({
            type: "GET",
            url: "http://api-bazar.stevanandreas.com/api/total",
            success: function(data) {
                var total = new Intl.NumberFormat('id-ID', {
                    maximumSignificantDigits: 3
                }).format(data.total)
                $("#total").html(`Rp ${total}`)
            }
        })

        $("#add-item button").on('click', function() {
            var nama = $("#add-item input[name=nama]").val()
            var nama_menu = $("#add-item select[name=nama_menu]").val()
            var jumlah = $("#add-item input[name=jumlah]").val()
            var harga = $("#add-item input[name=harga]").val()

            $.ajax({
                url: "http://api-bazar.stevanandreas.com/api/bazar",
                method: "POST",
                data: {
                    nama: nama,
                    nama_menu: nama_menu,
                    jumlah: jumlah,
                    harga: harga,
                },
                success: function(data) {
                    $("#add-item").modal('hide')
                    table.draw()
                }
            })
        })

        $("#example tbody").on('click', 'td button.edit-item', function() {
            var id = $(this).attr("data-id")
            $("#edit-item button").attr("data-id", id)
            console.log(id);
            $.ajax({
                url: "http://api-bazar.stevanandreas.com/api/bazar/" + id,
                type: "GET",
                success: function(data) {
                    console.log(data);
                    var nama = $("#edit-item input[name=nama]").val(data.nama)
                    var selectedB
                    var selectedPi
                    var selectedPy
                    if (data.nama_menu == "Banana Cheese") {
                        selectedB = 'selected'
                    }
                    if (data.nama_menu == "Piesecok") {
                        selectedPi = 'selected'
                    }
                    if (data.nama_menu == "Pyudding") {
                        selectedPy = 'selected'
                    }
                    var nama_menu = $("#edit-item select[name=nama_menu]").append(
                        `<option value="Banana Cheese" ${selectedB}>Banana Cheese</option>
                            <option value="Piesecok" ${selectedPi}>Piesecok</option>
                            <option value="Pyudding" ${selectedPy}>Pyudding</option>`
                    )
                    var jumlah = $("#edit-item input[name=jumlah]").val(data.jumlah)
                    var harga = $("#edit-item input[name=harga]").val(data.harga)

                    $("#edit-item").modal("show")
                }
            })
        })

        $("#edit-item button").on('click', function() {
            var id = $(this).attr("data-id")
            var nama = $("#edit-item input[name=nama]").val()
            var nama_menu = $("#edit-item select[name=nama_menu]").val()
            var jumlah = $("#edit-item input[name=jumlah]").val()
            var harga = $("#edit-item input[name=harga]").val()

            $.ajax({
                url: "http://api-bazar.stevanandreas.com/api/bazar/" + id,
                type: "POST",
                data: {
                    _method: "PUT",
                    nama: nama,
                    nama_menu: nama_menu,
                    jumlah: jumlah,
                    harga: harga,
                },
                success: function(data) {
                    $("#edit-item").modal('hide')
                    table.draw()
                }
            })
        })

        $("#example tbody").on('click', 'td button.delete-item', function() {
            var id = $(this).attr("data-id")
            if (confirm("Yakin ingin menghapus item?") == true) {
                $.ajax({
                    url: "http://api-bazar.stevanandreas.com/api/bazar/" + id,
                    type: "POST",
                    data: {
                        _method: "DELETE"
                    },
                    success: function(data) {
                        table.draw()
                    }
                })
            }
        })

        $("#example tbody").on('click', 'td button.update-item', function() {
            var id = $(this).attr("data-id")
            if (confirm("Yakin ingin menandai item?") == true) {
                $.ajax({
                    url: "http://api-bazar.stevanandreas.com/api/update-status/" + id,
                    type: "POST",
                    data: {
                        _method: "PUT"
                    },
                    success: function(data) {
                        table.draw()
                    }
                })
            }
        })
    </script>
</body>

</html>