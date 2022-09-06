<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <title>Document</title>
</head>
<body>

<div class="container table-responsive col-lg-8 shadow mt-3 p-5">
  <h3>Daftar Pengajar</h3>
  <a href="/teacher/teacher/create" class="btn btn-danger"><img src="../icon/person-plus.svg" > Input Data Baru</a>

  @if(session()->has('success'))
  <div class="alert alert-success mt-3" role="alert">
  {{session('success')}}
  </div>
  @endif

  <table class="table table-bordered table-hover mt-3">
		<thead>
			<tr class="table-primary">
				<th scope="col">ID Pengajar</th>
				<th scope="col">Nama Lengkap</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach( $teachers as $teacher) : ?>
			<tr class="table-bordered">
				<td scope="row"><?= $teacher["teacher_id"]; ?></td>
				<td><?= $teacher["fullname"]; ?></td>
				<td>
        <a href="/teacher/teacher/{{ $teacher->id }}" class="btn btn-info"><img src="../icon/eyeglasses.svg" alt=""></a>
				<a href="/teacher/teacher/{{ $teacher->id }}/edit" class="btn btn-success"><img src="../icon/pencil-square.svg" alt=""></a>
        <form action="/teacher/teacher/{{ $teacher->id }}" method="POST" class="d-inline">
          @method('delete')
          @csrf
          <button onclick="return confirm('yakin dihapus ?!');"class="btn btn-danger" ><img src="../icon/trash.svg" alt=""></button>
        </form>
        </td>      
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>

<!-- Start Modal
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
  </div>
</div>
End Modal -->

</body>
</html>