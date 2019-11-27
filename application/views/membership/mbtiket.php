<div class="container py-5">
  <div class="row">
    <div class="col-6">
      <h3 class="font-weight-bolder">Event Saya</h3>
    </div>
    <div class="col-6">
      <a href="?page=buat-event" class="float-right btn btn-primary btn-md mb-3">+ Tambah</a>
    </div>
  </div>

  <table class="table table-responsive-md">
    <tr>
      <th>No</th>
      <th>Nama Event</th>
      <th>Tanggal</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>1</td>
      <td>Seminar nasional pembetukan kemerdekaan</td>
      <td>Sabtu 12 Jan 2020</td>
      <td><span class="badge badge-info">Active</span></td>
      <td>
        <a href="?page=membership-event-detail&membership=yes" class="btn btn-outline-blue btn-sm mr-2 mb-2">Detail</a>
        <a href="#" class="btn btn-outline-danger btn-sm mb-2" data-toggle="modal" data-target=".bd-example-modal-sm">Hapus</a>
      </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Seminar nasional pembetukan kemerdekaan</td>
      <td>Sabtu 12 Jan 2020</td>
      <td><span class="badge badge-default">Draft</span></td>
      <td>
        <a href="?page=membership-event-detail&membership=yes" class="btn btn-outline-blue btn-sm mr-2 mb-2">Detail</a>
        <a href="#" class="btn btn-outline-danger btn-sm mb-2 "data-toggle="modal" data-target="#exampleModalCenter"   class="nav-link">Hapus</a>
      </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Seminar nasional pembetukan kemerdekaan</td>
      <td>Sabtu 12 Jan 2020</td>
      <td><span class="badge badge-danger">Closed</span></td>
      <td>
        <a href="?page=membership-event-detail&membership=yes" class="btn btn-outline-blue btn-sm mr-2 mb-2">Detail</a>
        <a href="#" class="btn btn-outline-danger btn-sm mb-2">Hapus</a>
      </td>
    </tr>
  </table>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
  aria-hidden="true">

  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" tabindex="-1" role="dialog">


    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <i class="glyphicon glyphicon-ok"></i>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
  </div>
</div>