<!DOCTYPE html>
<html>
<head>
    <title>Simple Crud Ajax</title>
    <!-- jquery -->
    <script src="./../jquery/jquery.js"></script>
    <!--/ jquery -->
    <!-- jquery command -->
    <script>
        $(document).ready(function(e) {
            loadData()

            // form tambah
            $("#contentData").on("click", "#addButton", function() {
                $.ajax({
                    url: 'form-add.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //button batal
            $("#contentData").on("click", "#cancelButton", function() {
                loadData();
            });
            
            
            //simpan data mahasiswa
            $("#contentData").on("submit", "#formAdd", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=save',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

               //form edit by id
            $("#contentData").on("click", "#EditButton", function() {
                var IdMhsw = $(this).attr("value");
                $.ajax({
                    url: 'form-edit.php',
                    type: 'get',
                    data: {
                        IdMhsw: IdMhsw
                    },
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

               //ubah data
               $("#contentData").on("submit", "#formEdit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });

               //hapus data
               $("#contentData").on("click", "#DeleteButton", function() {
                var IdMhsw = $(this).attr("value");
                $.ajax({
                    url: 'service.php?action=delete',
                    type: 'post',
                    data: {
                        IdMhsw: IdMhsw
                    },
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                })
            })
        })

    
    </script>
    <!--/ jquery command -->
    <!-- create function  -->
    <script>
        function loadData() {
            $.ajax({
                url: 'data-mahasiswa.php',
                type: 'get',
                success: function(data) {
                    $('#contentData').html(data);
                },
                error: function (data,status) {
                    $('#contentData').html(status);
                }
            });
        }
    </script>
    <!--/ create function  -->
</head>
<body>
    <div align="center">
        <h2>Simple Crud Ajax dan PHP</h2>
        <div id="contentData"></div>
    </div>
</body>
</html>