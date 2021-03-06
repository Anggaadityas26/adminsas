<?php
$id = $_GET['name'];

$cek = new Perusahaan();
    $sql = "SELECT * FROM tb_perusahaan WHERE kode_perusahaan = :id";
    $stmt = $cek->runQuery($sql);
    $stmt->execute(array(
        ':id'   =>$id));

    $row = $stmt->fetch(PDO::FETCH_LAZY);
?>

<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Data Perusahaan <small>Company Registered</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form class="form-horizontal form-label-left" method="post" action="">

                    <br/>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kode Perusahaan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="txt_kode" value="<?php echo $row['kode_perusahaan']; ?>" type="text" readonly>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Perusahaan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="txt_nama" value="<?php echo $row['nama_perusahaan']; ?>" type="text">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Bidang Usaha <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="txt_bidang" value="<?php echo $row['bidang_perusahaan']; ?>" type="text" required >
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Nomor NPWP Perusahan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="number" name="txt_npwp" data-validate-length-range="15" class="form-control col-md-7 col-xs-12" value="<?php echo $row['nomor_NPWP']; ?>" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Nomor SIUP Perusahan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="number" name="txt_siup" data-validate-length-range="15" class="form-control col-md-7 col-xs-12" value="<?php echo $row['nomor_SIUP']; ?>" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="telephone" name="txt_telp" data-validate-length-range="" class="form-control col-md-7 col-xs-12" value="<?php echo $row['nomor_telp']; ?>" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Handphone">Handphone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="tel" id="Handphone" name="txt_hp" value="<?php echo $row['nomor_hp']; ?>" class="form-control col-md-7 col-xs-12" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="FAX">FAX <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="tel" id="FAX" name="txt_fax" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="<?php echo $row['nomor_fax']; ?>" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="email" id="email" name="txt_email" class="form-control col-md-7 col-xs-12"  value="<?php echo $row['email']; ?>" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website URL <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="website" name="txt_website" value="<?php echo $row['website']; ?>" class="form-control col-md-7 col-xs-12" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Contact Person <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="txt_cp" value="<?php echo $row['contact_person']; ?>" type="text" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Alamat Perusahaan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <textarea id="textarea" name="txt_alamat" class="form-control col-md-7 col-xs-12"" required> <?php echo $row['alamat']; ?></textarea>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kelurahan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" value="<?php echo $row['kelurahan']; ?>" type="text" required>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kecamatan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="txt_kecamatan" type="text" value="<?php echo $row['kecamatan']; ?>" required> 
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kota <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="txt_kota" type="text" value="<?php echo $row['kota']; ?>" required>
                        </div>
                    </div>


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Cancel</button>
                            <button id="send" type="submit" name="newCompany" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>