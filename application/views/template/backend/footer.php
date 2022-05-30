				</div>
                <!-- Footer START -->
                <div class="footer">
                    <div class="footer-content">
                        <p class="mb-0">Copyright © 2022 <?= $web_title;?>. All rights reserved.</p>
                        <span>
                            <a href="" class="text-gray me-3">Term &amp; Conditions</a>
                            <a href="" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </div>
                <!-- Footer End -->
            </div>
            <!-- Content END -->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog right">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title pull-left">Quick View</h4>
                            <button type="button" class="close pull-right" data-bs-dismiss="modal">
                                <span>×</span>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            
                        </div>
                    </div>
                </div>            
            </div>
            <!-- Quick View END -->
        </div>
    </div>

	
	<!-- #General Modal -->
	<!-- Modal WIdget -->
	<div class="modal fade" id="widget" tabindex="-1" aria-labelledby="widgetModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="widgetModalLabel">Widget quick start</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body bg-light">
					<div class="row">
						<div class="col-6 col-md-3 icon-demo-col">
							<a href="<?= site_url('kanban');?>" class="card mb-4 icon-demo">
								<div class="card-body text-center">
									<i class="icon-layout feather"></i>
									<p class="mt-2 mb-0">Kanban</p>
								</div>
							</a>
						</div>
						<div class="col-6 col-md-3 icon-demo-col">
							<a href="<?= site_url('project');?>" class="card mb-4 icon-demo">
								<div class="card-body text-center">
									<i class="icon-package feather"></i>
									<p class="mt-2 mb-0">Project</p>
								</div>
							</a>
						</div>
						<div class="col-6 col-md-3 icon-demo-col">
							<a href="<?= site_url('pengaturan');?>" class="card mb-4 icon-demo">
								<div class="card-body text-center">
									<i class="icon-settings feather"></i>
									<p class="mt-2 mb-0">Pengaturan</p>
								</div>
							</a>
						</div>
						<div class="col-6 col-md-3 icon-demo-col">
							<a href="<?= site_url('pengaturan/mailer');?>" class="card mb-4 icon-demo">
								<div class="card-body text-center">
									<i class="icon-mail feather"></i>
									<p class="mt-2 mb-0">Mailer</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    
    <!-- Core Vendors JS -->
    <script src="<?= base_url();?>assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="<?= base_url();?>assets/js/app.min.js"></script>

</body>

</html>