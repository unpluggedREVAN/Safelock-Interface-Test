<?php
/*
*	SafeLock: Firewall and AdBlocker
*   Powered by OpenLock
*   https://openlocksecurity.com/
*
*  This file is copyright under the Costa Rica Intellectual Property office.
*/ ?>

<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style="float:none">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="text-center">
        <img src="img/logo.svg" alt="SafeLock logo" class="loginpage-logo">
      </div>
      <br>

      <div class="panel-title text-center"><span class="logo-lg" style="font-size: 25px;"><b>SafeLock</b></span></div>
      <p class="login-box-msg">Sign in to start your session</p>
      <div id="cookieInfo" class="panel-title text-center text-red" style="font-size: 150%" hidden>Verify that cookies are allowed for <code><?php echo $_SERVER['HTTP_HOST']; ?></code></div>
      <?php if ($wrongpassword) { ?>
        <div class="form-group has-error login-box-msg">
          <label class="control-label"><i class="fa fa-times-circle"></i> Wrong password!</label>
        </div>
      <?php } ?>
    </div>

    <div class="panel-body">
      <form action="" id="loginform" method="post">
        <div class="form-group login-options has-feedback<?php if ($wrongpassword) { ?> has-error<?php } ?>">
          <div class="pwd-field">
            <input type="password" id="loginpw" name="pw" class="form-control" placeholder="Password" autocomplete="current-password" autofocus>
            <span class="fa fa-key form-control-feedback"></span>
          </div>
          <div>
            <input type="checkbox" id="logincookie" name="persistentlogin">
            <label for="logincookie">Remember me for 7 days</label>
          </div>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary form-control"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Log in</button>
        </div>
        <div class="box login-help hidden-xs">
          <p><kbd>Return</kbd> &#10140; Log in and go to requested page (<?php echo $scriptname; ?>)</p>
          <p><kbd>Ctrl</kbd> + <kbd>Return</kbd> &#10140; Log in and go to Settings page</p>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="box box-<?php if (!$wrongpassword) { ?>info collapsed-box<?php } else { ?>danger<?php }?>">
              <div class="box-header with-border pointer no-user-select" data-widget="collapse">
                <h3 class="box-title">Forgot password?</h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool"><i class="fa <?php if ($wrongpassword) { ?>fa-minus<?php } else { ?>fa-plus<?php } ?>"></i>
                  </button>
                </div>
              </div>
              <div class="box-body">
                <p>
                  After installing SafeLock for the first time, a password is generated and displayed to the user.
                </p>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
