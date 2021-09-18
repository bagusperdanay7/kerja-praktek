<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.css">
    <title>Hello, world!</title>
  </head>
  <body>



        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1>DATA WFM</h1>
                        <a href="{{ route('wfm.create') }}" class="btn btn-primary">Tambah data</a>
                        <a href="{{ route('wfm.export') }}" class="btn btn-success">Export to excel</a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Import Excel
                        </button>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-bordered" id="table_id">
                            <thead class="thead-dark">
                                <th>NO</th>
                                <th>TGL/BLN/THN</th>
                                <th>NO. AO</th>
                                <th>WITEL</th>
                                <th>OLO / ISP</th>
                                <th>SITE KRITERIA</th>
                                <th>SID</th>
                                <th>SITE ID</th>
                                <th>ORDER TYPE</th>
                                <th>PRODUK</th>
                                <th>SATUAN</th>
                                <th>KAPASITAS [BW]</th>
                                <th>LONGITUDE</th>
                                <th>LATITUDE</th>
                                <th>ALAMAT ASAL</th>
                                <th>ALAMAT TUJUAN</th>
                                <th>STATUS NCX</th>
                                <th>BERITA ACARA</th>
                                <th>TGL COMPLETE WFM</th>
                                <th>STATUS WFM</th>
                                <th>ALASAN CANCEL</th>
                                <th>CANCEL By</th>
                                <th>START CANCEL DATE</th>
                                <th>READY AFTER CANCEL</th>
                                <th>INTEGRASI</th>
                                <th>METRO</th>
                                <th>IP</th>
                                <th>PORT</th>
                                <th>METRO</th>
                                <th>IP</th>
                                <th>PORT</th>
                                <th>VLAN</th>
                                <th>VCID</th>
                                <th>GPON</th>
                                <th>IP</th>
                                <th>PORT</th>
                                <th>SN</th>
                                <th>PORT</th>
                                <th>TYPE</th>
                                <th>NAMA</th>
                                <th>IP</th>
                                <th>DOWNLINK</th>
                                <th>TYPE</th>
                                <th>CAPTURE DONE</th>
                                <th>PIC</th>
                                <th>AKSI</th>
                            </thead>
                            <tbody>
                                @foreach ($wfms as $wfm)
                                <tr>
                                    <td>{{$wfm->no }}</td>
                                    <td>{{$wfm->tgl_bulan_th }}</td>
                                    <td>{{$wfm->no_ao }}</td>
                                    <td>{{$wfm->witel }}</td>
                                    <td>{{$wfm->olo_isp }}</td>
                                    <td>{{$wfm->site_kriteria }}</td>
                                    <td>{{$wfm->sid }}</td>
                                    <td>{{$wfm->site_id }}</td>
                                    <td>{{$wfm->order_type}}</td>
                                    <td>{{$wfm->produk }}</td>
                                    <td>{{$wfm->satuan }}</td>
                                    <td>{{$wfm->kapasitas_bw }}</td>
                                    <td>{{$wfm->longitude }}</td>
                                    <td>{{$wfm->latitude }}</td>
                                    <td>{{$wfm->alamat_asal }}</td>
                                    <td>{{$wfm->alamat_tujuan}}</td>
                                    <td>{{$wfm->status_ncx }}</td>
                                    <td>{{$wfm->berita_acara }}</td>
                                    <td>{{$wfm->tgl_complete}}</td>
                                    <td>{{$wfm->status_wfm }}</td>
                                    <td>{{$wfm->alasan_cancel }}</td>
                                    <td>{{$wfm->cancel_by }}</td>
                                    <td>{{$wfm->start_cancel }}</td>
                                    <td>{{$wfm->ready_after_cancel }}</td>
                                    <td>{{$wfm->integrasi }}</td>
                                    <td>{{$wfm->metro }}</td>
                                    <td>{{$wfm->ip }}</td>
                                    <td>{{$wfm->port }}</td>
                                    <td>{{$wfm->metro2 }}</td>
                                    <td>{{$wfm->ip2  }}</td>
                                    <td>{{$wfm->port2 }}</td>
                                    <td>{{$wfm->vlan }}</td>
                                    <td>{{$wfm->vcid }}</td>
                                    <td>{{$wfm->gpon }}</td>
                                    <td>{{$wfm->ip3 }}</td>
                                    <td>{{$wfm->port3 }}</td>
                                    <td>{{$wfm->sn }}</td>
                                    <td>{{$wfm->port4 }}</td>
                                    <td>{{$wfm->type }}</td>
                                    <td>{{$wfm->nama }}</td>
                                    <td>{{$wfm->ip4 }}</td>
                                    <td>{{$wfm->downlink }}</td>
                                    <td>{{$wfm->type2 }}</td>
                                    <td>{{$wfm->capture_done }}</td>
                                    <td>{{$wfm->pic }}</td>
                                    <td>
                                        <a href="{{ route('wfm.edit',$wfm->id) }}" class="btn btn-success">Edit</a>
                                        <form action="{{ route('wfm.delete',$wfm->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin anda delete ? ')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('wfm.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlFile1">Pilih file</label>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
                  </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary">Import</button>
                </div>
            </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
} );
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
