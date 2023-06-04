<?php
/*
*	SafeLock: Firewall and AdBlocker
*   Powered by OpenLock
*   https://openlocksecurity.com/
*
*  This file is copyright under the Costa Rica Intellectual Property office.
*/ ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- Modal for custom disable time -->
    <div class="modal fade" id="customDisableModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Custom disable timeout</h4>
                </div>
                <div class="modal-body">
                    <div class="input-group">
                        <input id="customTimeout" class="form-control" type="number" value="60">
                            <div class="input-group-btn" data-toggle="buttons">
                                <label class="btn btn-default">
                                    <input id="selSec" type="radio"> Secs
                                </label>
                                <label id="btnMins" class="btn btn-default active">
                                    <input id="selMin" type="radio"> Mins
                                </label>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="safelock-disable-custom" class="btn btn-primary" data-dismiss="modal">Submit</button>
                </div>
            </div>
        </div>
    </div> <!-- /.content-wrapper -->

<?php
    // Flushes the system write buffers of PHP. This attempts to push everything we have so far all the way to the client's browser.
    flush();
    // Run update checker
    //  - determines local branch each time,
    //  - determines local and remote version every 30 minutes
    require "scripts/pi-hole/php/update_checker.php";

    $coreVersionStr = $core_current . (isset($core_commit) ? " (" . $core_branch . ", " . $core_commit . ")" : "");
    $ftlVersionStr = $FTL_current . (isset($FTL_commit) ? " (" . $FTL_branch . ", " . $FTL_commit . ")" : "");
    $webVersionStr = $web_current . (isset($web_commit) ? " (" . $web_branch . ", " . $web_commit . ")" : "");
    $dockerTag = htmlspecialchars(getenv('PIHOLE_DOCKER_TAG'));

    $githubBaseUrl = "https://github.com/pi-hole";
    $coreUrl = $githubBaseUrl . "/pi-hole";
    $dockerUrl = $githubBaseUrl . "/docker-pi-hole";
    $ftlUrl = $githubBaseUrl . "/FTL";
    $webUrl = $githubBaseUrl . "/AdminLTE";

    $coreReleasesUrl = $coreUrl . "/releases";
    $dockerReleasesUrl = $dockerUrl . "/releases";
    $ftlReleasesUrl = $ftlUrl . "/releases";
    $webReleasesUrl = $webUrl . "/releases";
?>
    <footer class="main-footer">
        <div class="row row-centered text-center">
            <div class="col-xs-12 col-sm-6">
                <strong><a href="https://openlocksecurity.com/" rel="noopener" target="_blank"> Visit Us.</a></strong> Powered by OpenLock.
            </div>
        </div>

        <div class="row row-centered text-center version-info">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <?php if (isset($core_commit) || isset($web_commit) || isset($FTL_commit)) { ?>
                <ul class="list-unstyled">
                    <?php if($dockerTag) { ?> <li><strong>Docker Tag</strong> <?php echo $dockerTag; ?></li> <?php } ?>
                    <li><strong>SafeLock v.1.0</strong></li>
                    <li><strong>FireWall and Ad Blocker</strong> </li>
                    <li><strong>Web Interface v.1.0</strong> </li>
                </ul>
                <?php } else { ?>
                <ul class="list-inline">
                    <?php if($dockerTag) { ?>
                    <li>
                        <strong>Docker Tag</strong>
                        <a href="<?php echo $dockerReleasesUrl . "/" . $dockerTag; ?>" rel="noopener" target="_blank"><?php echo $dockerTag; ?></a>
                    </li>
                    <?php } ?>
                    <li>
                        <strong>SafeLock</strong>
                        <a href="<?php echo $coreReleasesUrl . "/" . $core_current; ?>" rel="noopener" target="_blank"><?php echo $core_current; ?></a>
                        <?php if ($core_update) { ?> &middot; <a class="lookatme" lookatme-text="Update available!" href="<?php echo $coreReleasesUrl . "/latest"; ?>" rel="noopener" target="_blank">Update available!</a><?php } ?>
                    </li>
                    <li>
                        <strong>FTL</strong>
                        <a href="<?php echo $ftlReleasesUrl . "/" . $FTL_current; ?>" rel="noopener" target="_blank"><?php echo $FTL_current; ?></a>
                        <?php if ($FTL_update) { ?> &middot; <a class="lookatme" lookatme-text="Update available!" href="<?php echo $ftlReleasesUrl . "/latest"; ?>" rel="noopener" target="_blank">Update available!</a><?php } ?>
                    </li>
                    <li>
                        <strong>Web Interface</strong>
                        <a href="<?php echo $webReleasesUrl . "/" . $web_current; ?>" rel="noopener" target="_blank"><?php echo $web_current; ?></a>
                        <?php if ($web_update) { ?> &middot; <a class="lookatme" lookatme-text="Update available!" href="<?php echo $webReleasesUrl . "/latest"; ?>" rel="noopener" target="_blank">Update available!</a><?php } ?>
                    </li>
                </ul>
                <?php } ?>
            </div>
        </div>
    </footer>

</div>
<!-- ./wrapper -->
<script src="scripts/pi-hole/js/footer.js?v=<?=$cacheVer?>"></script>
</body>
</html>
