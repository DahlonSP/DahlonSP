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
        <div class="container mt-3 col-8 shadow p-3">
			<div class="row border-bottom p-3 border-light border-3">
				<div class="col-lg-3">
				<img src="/img/{{ $teacher->picture }}" alt="" class="border-bottom border-end border-light" style="width: 200px;">
				</div>
				<div class="col-lg-9">
				<h3>profile Pengajar</h3>
				<p>{{ $teacher->teacher_id }}</p>
				<p>{{ $teacher->fullname }}</p>
				<p>{{ $teacher->position }}</p>
				<p>{{ $teacher->word }}</p>
				</div>
			</div>

			<div class="list-group">
			<dt for="" class="">Tempat Lahir</dt>
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->place_birth }}</div>
			<dt for="" class="">Tanggal Lahir</dt>
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->birth_date }}</div>
			<dt for="" class="">Alamat</dt>
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->full_address }}</div>
			<dt for="" class="">Pendidikan SMU</dt>
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->pra_bachelor }}</div>
			<dt for="" class="">Pendidikan Sarjana</dt>
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->bachelor }}</div>
			<dt for="" class="">Pendidikan Magister</dt>
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->masters }}</div>
			<dt for="" class="">Pendidikan Doktroral</dt>
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->doctoral }}</div>
			<dt for="" class="">Deskripsi Pekerjaan</dt>
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->job_desk }}</div>
			<dt for="" class="">Tanggal Bergabung</dt>
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->date_joint }}</div>
			<dt for="" class="">Penugasan</dt>
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->assignment }}</div>
			<dt for="" class="">Tanggal Pembaharuan</dt>	
			<div class="border-bottom p-3 border-light border-3">{{ $teacher->updated_at }}</div>
			</div>
       
    	</div>

</body>
</html>