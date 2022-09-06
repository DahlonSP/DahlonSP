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
<div class="container mt-3 col-lg-6 border shadow p-5">
    <h3>Form Pengisian Data Pengajar</h3>
      <form action="/teacher/teacher" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="mb-3">
					<label for="teacher_id" class="col-form-label">ID Dosen</label>
					<input type="text" class="form-control @error('teacher_id') is-invalid @enderror" name="teacher_id" id="teacher_id" required value="{{old('teacher_id')}}">
				</div>
				<div class="mb-3">
					<label for="fullname" class="col-form-label">Nama Lengkap</label>
					<input type="text" class="form-control" name="fullname" id="fullname" required value="{{old('fullname')}}">
				</div>
				<div class="mb-3">
					<label for="place_birth" class="col-form-label">Tempat Lahir</label>
					<input type="text" class="form-control" name="place_birth" id="place_birth" value="{{old('place_birth')}}">
				</div>
				<div class="mb-3">
					<label for="birth_date" class="col-form-label">Tanggal Lahir</label>
					<input type="date" class="form-control" name="birth_date" id="birth_date" value="{{old('birth_date')}}">
				</div>

				<div class="mb-3">
					<label for="full_address" class="col-form-label">Alamat</label>
					<input type="text" class="form-control" name="full_address" id="full_address" value="{{old('full_address')}}">
				</div>
				<div class="mb-3">
					<label for="pra_bachelor" class="col-form-label">Pra Sarjana</label>
					<input type="text" class="form-control" name="pra_bachelor" id="pra_bachelor" value="{{old('pra_bachelor')}}">
				</div>
				<div class="mb-3">
					<label for="bachelor" class="col-form-label">Sarjana</label>
					<input type="text" class="form-control" name="bachelor" id="bachelor" required value="{{old('bachelor')}}">
				</div>
				<div class="mb-3">
					<label for="masters" class="col-form-label">Magister</label>
					<input type="text" class="form-control" name="masters" id="masters" required value="{{old('masters')}}">
				</div>
				<div class="mb-3">
					<label for="doctoral" class="col-form-label">Doktoral</label>
					<input type="text" class="form-control" name="doctoral" id="doctoral" required value="{{old('doctoral')}}">
				</div>
				<div class="mb-3">
					<label for="job_desk" class="col-form-label">Deskripsi Pekerjaan</label>
					<input type="text" class="form-control" name="job_desk" id="job_desk" value="{{old('job_desk')}}">
				</div>
				<div class="mb-3">
					<label for="position" class="col-form-label">Posisi</label>
					<input type="text" class="form-control" name="position" id="position" value="{{old('position')}}">
				</div>
				<div class="mb-3">
					<label for="date_joint" class="col-form-label">Tanggal Bergabung</label>
					<input type="date" class="form-control" name="date_joint" id="date_joint" value="{{old('date_joint')}}">
				</div>
				<div class="mb-3">
					<label for="assignment" class="col-form-label">Penugasan</label>
					<input type="text" class="form-control" name="assignment" id="assignment" value="{{old('assignment')}}">
				</div>
				<div class="mb-3">
					<label for="word" class="col-form-label">Kata Nasihat</label>
					<textarea class="form-control" name="word" id="word" value="{{old('word')}}"></textarea>
				</div>
				
				<div class="mb-3">
					<label for="picture" class="col-form-label">Foto Profil</label>
					<input type="text" class="form-control" name="picture" id="picture" value="{{old('picture')}}">
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit"class="btn btn-danger">Simpan</button>
                </div>
		</div>
		
		</form>
    </div>

<!-- <div class="modal modal-alert position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalChoice">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-4 text-center">
      <h3>Form Pengisian Data Pengajar</h3>
      <form action="/teacher/teacher/store" method="POST" enctype="multipart/form-data">
				<div class="mb-3">
					<label for="txtteacher_id" class="col-form-label">ID Dosen</label>
					<input type="text" class="form-control" name="txtteacher_id" id="txtteacher_id" required>
				</div>
				<div class="mb-3">
					<label for="txtfullname" class="col-form-label">Nama Lengkap</label>
					<input type="text" class="form-control" name="txtfullname" id="txtfullname" required>
				</div>
				<div class="mb-3">
					<label for="txtplace_birth" class="col-form-label">Tempat Lahir</label>
					<input type="text" class="form-control" name="txtplace_birth" id="txtplace_birth" >
				</div>
				<div class="mb-3">
					<label for="txtbirth_date" class="col-form-label">Tanggal Lahir</label>
					<input type="date" class="form-control" name="txtbirth_date" id="txtbirth_date" >
				</div>

				<div class="mb-3">
					<label for="txtfull_address" class="col-form-label">Alamat</label>
					<input type="text" class="form-control" name="txtfull_address" id="txtfull_address" >
				</div>
				<div class="mb-3">
					<label for="txtpra_bachelor" class="col-form-label">Pra Sarjana</label>
					<input type="text" class="form-control" name="txtpra_bachelor" id="txtpra_bachelor" >
				</div>
				<div class="mb-3">
					<label for="txtbachelor" class="col-form-label">Sarjana</label>
					<input type="text" class="form-control" name="txtbachelor" id="txtbachelor" required>
				</div>
				<div class="mb-3">
					<label for="txtmasters" class="col-form-label">Magister</label>
					<input type="text" class="form-control" name="txtmasters" id="txtmasters" required>
				</div>
				<div class="mb-3">
					<label for="txtdoctoral" class="col-form-label">Doktoral</label>
					<input type="text" class="form-control" name="txtdoctoral" id="txtdoctoral" required>
				</div>
				<div class="mb-3">
					<label for="txtjob_desk" class="col-form-label">Deskripsi Pekerjaan</label>
					<input type="text" class="form-control" name="txtjob_desk" id="txtjob_desk" >
				</div>
				<div class="mb-3">
					<label for="txtposition" class="col-form-label">Posisi</label>
					<input type="text" class="form-control" name="txtposition" id="txtposition" >
				</div>
				<div class="mb-3">
					<label for="txtdate_joint" class="col-form-label">Tanggal Bergabung</label>
					<input type="date" class="form-control" name="txtdate_joint" id="txtdate_joint" >
				</div>
				<div class="mb-3">
					<label for="txtassignment" class="col-form-label">Penugasan</label>
					<input type="text" class="form-control" name="txtassignment" id="txtassignment" >
				</div>
				<div class="mb-3">
					<label for="txtword" class="col-form-label">Kata Nasihat</label>
					<textarea class="form-control" name="txtword" id="txtword"></textarea>
				</div>
				
				<div class="mb-3">
					<label for="gambar" class="col-form-label">Foto Profil</label>
					<input type="file" class="form-control" name="gambar" id="gambar" >
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="submit"class="btn btn-danger">Simpan</button>
                </div>
		</div>
		
		</form>
    </div>
  </div>
</div> -->

    
</body>
</html>