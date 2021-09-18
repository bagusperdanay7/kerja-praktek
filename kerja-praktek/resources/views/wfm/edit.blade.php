<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h1>Form Edit Data</h1>
            </div>
            <div class="card-body mb-2">
                <form action="{{ route('wfm.update',$wfm->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="no">NO</label>
                        <input type="text" name="no" id="no" class="form-control" value="{{ $wfm->no }}">
                    </div>
                    <div class="form-group">
                        <label for="TGL/BLN/THN">TGL/BLN/THN</label>
                        <input type="date" name="tgl_bulan_th" id="TGL/BLN/THN" class="form-control" value="{{ $wfm->tgl_bulan_th }}">
                    </div>
                    <div class="form-group">
                        <label for="NO. AO">NO. AO</label>
                        <input type="text" name="no_ao" id="NO. AO" class="form-control" value="{{ $wfm->no_ao }}">
                    </div>
                    <div class="form-group">
                        <label for="witel">WITEL</label>
                        <select name="witel" id="witel" class="form-control">
                            @foreach ($database as $item)
                            <option value="{{ $item->witel }}">{{ $item->witel }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="olo">OLO / ISP</label>
                        <select name="olo_isp" id="olo" class="form-control">
                            @foreach ($database as $item)
                            <option value="{{ $item->olo_isp }}">{{ $item->olo_isp }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="site">SITE KRITERIA</label>
                        <select name="site_kriteria" id="site" class="form-control">
                            @foreach ($database as $item)
                            <option value="{{ $item->site_kriteria }}">{{ $item->site_kriteria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no">SID</label>
                        <input type="text" name="sid" id="no" class="form-control" value="{{ $wfm->sid }}">
                    </div>
                    <div class="form-group">
                        <label for="no">SITE ID</label>
                        <input type="text" name="site_id" id="no" class="form-control" value="{{ $wfm->site_id }}">
                    </div>
                    <div class="form-group">
                        <label for="site">ORDER TYPE</label>
                        <select name="order_type" id="site" class="form-control">
                            @foreach ($database as $item)
                            <option value="{{ $item->order_type }}">{{ $item->order_type }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="site">PRODUK</label>
                        <select name="produk" id="site" class="form-control">
                            @foreach ($database as $item)
                            <option value="{{ $item->produk }}">{{ $item->produk }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="site">SATUAN</label>
                        <select name="satuan" id="site" class="form-control">
                            @foreach ($database as $item)
                            <option value="{{ $item->satuan }}">{{ $item->satuan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no">KAPASITAS [BW]</label>
                        <input type="text" name="kapasitas_bw" id="no" class="form-control" value="{{ $wfm->kapasitas_bw }}">
                    </div>
                    <div class="form-group">
                        <label for="no">LONGITUDE</label>
                        <input type="text" name="longitude" id="no" class="form-control" value="{{ $wfm->longitude }}">
                    </div>
                    <div class="form-group">
                        <label for="no">LATITUDE</label>
                        <input type="text" name="latitude" id="no" class="form-control" value="{{ $wfm->latitude }}">
                    </div>
                    <div class="form-group">
                        <label for="no">ALAMAT ASAL</label>
                        <input type="text" name="alamat_asal" id="no" class="form-control" value="{{ $wfm->alamat_asal }}">
                    </div>
                    <div class="form-group">
                        <label for="no">ALAMAT TUJUAN</label>
                        <input type="text" name="alamat_tujuan" id="no" class="form-control" value="{{ $wfm->alamat_tujuan }}">
                    </div>
                    <div class="form-group">
                        <label for="site">STATUS NCX</label>
                        <select name="status_ncx" id="site" class="form-control">
                            @foreach ($database as $item)
                            <option value="{{ $item->status_ncx }}">{{ $item->status_ncx }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no">BERITA ACARA</label>
                        <input type="text" name="berita_acara" id="no" class="form-control" value="{{ $wfm->berita_acara }}">
                    </div>
                    <div class="form-group">
                        <label for="no">TGL COMPLETE WFM</label>
                        <input type="date" name="tgl_complete" id="no" class="form-control" value="{{ $wfm->tgl_complete }}">
                    </div>
                    <div class="form-group">
                        <label for="no">STATUS WFM</label>
                        <input type="text" name="status_wfm" id="no" class="form-control" value="{{ $wfm->status_wfm }}">
                    </div>
                    <div class="form-group">
                        <label for="no">ALASAN CANCEL</label>
                        <input type="text" name="alasan_cancel" id="no" class="form-control" value="{{ $wfm->alasan_cancel }}">
                    </div>
                    <div class="form-group">
                        <label for="no">CANCEL By</label>
                        <input type="text" name="cancel_by" id="no" class="form-control" value="{{ $wfm->cancel_by }}">
                    </div>
                    <div class="form-group">
                        <label for="no">START CANCEL DATE</label>
                        <input type="date" name="start_cancel" id="no" class="form-control" value="{{ $wfm->start_cancel }}">
                    </div>
                    <div class="form-group">
                        <label for="no">READY AFTER CANCEL</label>
                        <input type="date" name="ready_after_cancel" id="no" class="form-control" value="{{ $wfm->ready_after_cancel }}">
                    </div>
                    <div class="form-group">
                        <label for="no">INTEGRASI</label>
                        <input type="date" name="integrasi" id="no" class="form-control" value="{{ $wfm->integrasi }}">
                    </div>
                    <div class="form-group">
                        <label for="no">METRO</label>
                        <input type="text" name="metro" id="no" class="form-control" value="{{ $wfm->metro }}">
                    </div>
                    <div class="form-group">
                        <label for="no">IP</label>
                        <input type="text" name="ip" id="no" class="form-control" value="{{ $wfm->ip }}">
                    </div>
                    <div class="form-group">
                        <label for="no">PORT</label>
                        <input type="text" name="port" id="no" class="form-control" value="{{ $wfm->port }}">
                    </div>
                    <div class="form-group">
                        <label for="no">METRO</label>
                        <input type="text" name="metro2" id="no" class="form-control" value="{{ $wfm->metro2 }}">
                    </div>
                    <div class="form-group">
                        <label for="no">IP</label>
                        <input type="text" name="ip2" id="no" class="form-control" value="{{ $wfm->ip2 }}">
                    </div>
                    <div class="form-group">
                        <label for="no">PORT</label>
                        <input type="text" name="port2" id="no" class="form-control" value="{{ $wfm->port2 }}">
                    </div>
                    <div class="form-group">
                        <label for="no">VLAN</label>
                        <input type="text" name="vlan" id="no" class="form-control" value="{{ $wfm->vlan }}">
                    </div>
                    <div class="form-group">
                        <label for="no">VCID</label>
                        <input type="text" name="vcid" id="no" class="form-control" value="{{ $wfm->vcid }}">
                    </div>
                    <div class="form-group">
                        <label for="no">GPON</label>
                        <input type="text" name="gpon" id="no" class="form-control" value="{{ $wfm->gpon }}">
                    </div>
                    <div class="form-group">
                        <label for="no">IP</label>
                        <input type="text" name="ip3" id="no" class="form-control" value="{{ $wfm->ip3 }}">
                    </div>
                    <div class="form-group">
                        <label for="no">PORT</label>
                        <input type="text" name="port3" id="no" class="form-control" value="{{ $wfm->port3 }}">
                    </div>
                    <div class="form-group">
                        <label for="no">SN</label>
                        <input type="text" name="sn" id="no" class="form-control" value="{{ $wfm->sn }}">
                    </div>
                    <div class="form-group">
                        <label for="no">PORT</label>
                        <input type="text" name="port4" id="no" class="form-control" value="{{ $wfm->port4 }}">
                    </div>
                    <div class="form-group">
                        <label for="no">TYPE</label>
                        <input type="text" name="type" id="no" class="form-control" value="{{ $wfm->type }}">
                    </div>
                    <div class="form-group">
                        <label for="no">NAMA</label>
                        <input type="text" name="nama" id="no" class="form-control" value="{{ $wfm->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="no">IP</label>
                        <input type="text" name="ip4" id="no" class="form-control" value="{{ $wfm->ip4 }}">
                    </div>
                    <div class="form-group">
                        <label for="no">DOWNLINK</label>
                        <input type="text" name="downlink" id="no" class="form-control" value="{{ $wfm->downlink }}">
                    </div>
                    <div class="form-group">
                        <label for="no">TYPE</label>
                        <input type="text" name="type2" id="no" class="form-control" value="{{ $wfm->type2 }}">
                    </div>
                    <div class="form-group">
                        <label for="no">CAPTURE DONE</label>
                        <input type="text" name="capture_done" id="no" class="form-control" value="{{ $wfm->capture_done }}">
                    </div>
                    <div class="form-group">
                        <label for="no">PIC</label>
                        <input type="text" name="pic" id="no" class="form-control" value="{{ $wfm->pic }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
