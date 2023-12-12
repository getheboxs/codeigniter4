<div class="modal fade" id="addusermodal" tabindex="-1" role="dialog" aria-labelledby="addusermodal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addusermodaltitle">Tambah User Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= site_url('users/tambah'); ?>" method="POST" accept-charset="UTF-8" onsubmit="simpanButton.disabled = true; return true;">
            <?= csrf_field() ?>
            <div class="form-group row">
                <div class="col">
                    <label for="firstname">First name</label>
                    <input class="form-control" required type="text" name="firstname" value="" placeholder="First name"/>
                </div>
                <div class="col">
                    <label for="lastname">Last name</label>
                    <input class="form-control" required type="text" name="lastname" value="" placeholder="Last name"/>
                </div>
            </div>

            <div class="form-group">
                <label for="name">Nickname</label>
                <input class="form-control" required type="text" name="nickname" value="" placeholder="Nick name"/>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" required type="text" name="username" value="" placeholder="Username"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" required type="password" name="password" value="" placeholder="Password" />
            </div>
            <div class="form-group">
                <input class="form-control" required type="password" name="password_confirm" value="" placeholder="Confirm Password" />
            </div>

            <div class="text-right">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times-circle"></i> Close</button>
                <button type="submit" class="btn btn-primary" name="simpanButton"><i class="fas fa-plus-circle"></i> Save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>