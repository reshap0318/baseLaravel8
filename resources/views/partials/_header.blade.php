
<!--begin::Header-->
<div id="kt_header" class="header header-fixed">

	<!--begin::Container-->
	<div class="container d-flex align-items-stretch justify-content-between">

		<!--begin::Left-->
		<div class="d-flex align-items-stretch mr-3">

			<!--begin::Header Logo-->
			<div class="header-logo">
				<a href="index.html">
				   <img alt="Logo" src="{{ asset('assets/media/logos/logo-letter-9.png') }}" class="logo-default max-h-40px" />
				   <img alt="Logo" src="{{ asset('assets/media/logos/logo-letter-1.png') }}" class="logo-sticky max-h-40px" />
				</a>
			</div>

			<!--end::Header Logo-->

			<!--begin::Header Menu Wrapper-->
			<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

				<!--begin::Header Menu-->
				<div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default header-menu-root-arrow">

					<!--begin::Header Nav-->
					<ul class="menu-nav">
						@include('partials._menu')
						<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">Crud</span>
								<span class="menu-desc"></span>
								<i class="menu-arrow"></i>
							</a>
							<div class="menu-submenu menu-submenu-classic menu-submenu-left">
								<ul class="menu-subnav">
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
														<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Forms &amp; Controls</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Form Controls</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/controls/base.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Base Inputs</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/controls/input-group.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Input Groups</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/controls/checkbox.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Checkbox</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/controls/radio.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Radio</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/controls/switch.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Switch</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/controls/option.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Mega Options</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Form Widgets</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/bootstrap-datetimepicker.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Datetimepicker</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/bootstrap-datepicker.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Datepicker</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/bootstrap-timepicker.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Timepicker</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/bootstrap-daterangepicker.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Daterangepicker</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/tagify.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Tagify</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/bootstrap-touchspin.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Touchspin</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/bootstrap-maxlength.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Maxlength</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/bootstrap-switch.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Switch</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/bootstrap-multipleselectsplitter.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Multiple Select Splitter</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/bootstrap-select.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Bootstrap Select</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/select2.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Select2</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/typeahead.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Typeahead</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Form Widgets 2</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/nouislider.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">noUiSlider</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/form-repeater.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Form Repeater</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/ion-range-slider.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Ion Range Slider</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/input-mask.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Input Masks</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/jquery-mask.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">jQuery Mask</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/autosize.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Autosize</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/clipboard.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Clipboard</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/widgets/recaptcha.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Google reCaptcha</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Form Text Editors</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/editors/tinymce.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">TinyMCE</span>
																</a>
															</li>
															<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
																<a href="javascript:;" class="menu-link menu-toggle">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">CKEditor</span>
																	<i class="menu-arrow"></i>
																</a>
																<div class="menu-submenu menu-submenu-classic menu-submenu-right">
																	<ul class="menu-subnav">
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/forms/editors/ckeditor-classic.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-line">
																					<span></span>
																				</i>
																				<span class="menu-text">CKEditor Classic</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/forms/editors/ckeditor-inline.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-line">
																					<span></span>
																				</i>
																				<span class="menu-text">CKEditor Inline</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/forms/editors/ckeditor-balloon.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-line">
																					<span></span>
																				</i>
																				<span class="menu-text">CKEditor Balloon</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/forms/editors/ckeditor-balloon-block.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-line">
																					<span></span>
																				</i>
																				<span class="menu-text">CKEditor Balloon Block</span>
																			</a>
																		</li>
																		<li class="menu-item" aria-haspopup="true">
																			<a href="crud/forms/editors/ckeditor-document.html" class="menu-link">
																				<i class="menu-bullet menu-bullet-line">
																					<span></span>
																				</i>
																				<span class="menu-text">CKEditor Document</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/editors/quill.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Quill Text Editor</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/editors/summernote.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Summernote WYSIWYG</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/editors/bootstrap-markdown.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Markdown Editor</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Form Layouts</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/layouts/default-forms.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Default Forms</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/layouts/multi-column-forms.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Multi Column Forms</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/layouts/action-bars.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Basic Action Bars</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/layouts/sticky-action-bar.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Sticky Action Bar</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Form Validation</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/validation/states.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Validation States</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/validation/form-controls.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Form Controls</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/forms/validation/form-widgets.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Form Widgets</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
														<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">KTDatatable</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Base</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/base/data-local.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Local Data</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/base/data-json.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">JSON Data</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/base/data-ajax.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Ajax Data</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/base/html-table.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">HTML Table</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/base/local-sort.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Local Sort</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/base/translation.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Translation</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Advanced</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/advanced/record-selection.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Record Selection</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/advanced/row-details.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Row Details</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/advanced/modal.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Modal Examples</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/advanced/column-rendering.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Column Rendering</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/advanced/column-width.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Column Width</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/advanced/vertical.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Vertical Scrolling</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Child Datatables</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/child/data-local.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Local Data</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/child/data-ajax.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Remote Data</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">API</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/api/methods.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">API Methods</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/ktdatatable/api/events.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Events</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Datatables.net</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Basic</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/basic/basic.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Basic Tables</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/basic/scrollable.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Scrollable Tables</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/basic/headers.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Complex Headers</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/basic/paginations.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Pagination Options</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Advanced</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/advanced/column-rendering.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Column Rendering</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/advanced/multiple-controls.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Multiple Controls</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/advanced/column-visibility.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Column Visibility</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/advanced/row-callback.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Row Callback</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/advanced/row-grouping.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Row Grouping</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/advanced/footer-callback.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Footer Callback</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Data sources</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/data-sources/html.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">HTML</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/data-sources/javascript.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Javascript</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/data-sources/ajax-client-side.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Ajax Client-side</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/data-sources/ajax-server-side.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Ajax Server-side</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Search Options</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/search-options/column-search.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Column Search</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/search-options/advanced-search.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Advanced Search</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Extensions</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/extensions/buttons.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Buttons</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/extensions/colreorder.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">ColReorder</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/extensions/keytable.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">KeyTable</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/extensions/responsive.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Responsive</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/extensions/rowgroup.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">RowGroup</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/extensions/rowreorder.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">RowReorder</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/extensions/scroller.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Scroller</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="crud/datatables/extensions/select.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-dot">
																		<span></span>
																	</i>
																	<span class="menu-text">Select</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Gift.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="#000000" />
														<path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">File Upload</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item" aria-haspopup="true">
													<a href="crud/file-upload/image-input.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Image Input</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="crud/file-upload/dropzonejs.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">DropzoneJS</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="crud/file-upload/uppy.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Uppy</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<li class="menu-item menu-item-submenu menu-item-rel" data-menu-toggle="click" aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">Apps</span>
								<span class="menu-desc"></span>
								<i class="menu-arrow"></i>
							</a>
							<div class="menu-submenu menu-submenu-classic menu-submenu-left">
								<ul class="menu-subnav">
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Gift.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="#000000" />
														<path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Users</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/user/list-default.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Default</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/user/list-datatable.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Datatable</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/user/list-columns-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Columns 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/user/list-columns-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Columns 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/user/add-user.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Add User</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/user/edit-user.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Edit User</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Address-card.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Profile</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Profile 1</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/profile/profile-1/overview.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Overview</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/profile/profile-1/personal-information.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Personal Information</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/profile/profile-1/account-information.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Account Information</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/profile/profile-1/change-password.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Change Password</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/profile/profile-1/email-settings.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Email Settings</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/profile/profile-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Profile 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/profile/profile-3.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Profile 3</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/profile/profile-4.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Profile 4</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Adress-book1.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M17,2 L19,2 C20.6568542,2 22,3.34314575 22,5 L22,19 C22,20.6568542 20.6568542,22 19,22 L17,22 L17,2 Z" fill="#000000" opacity="0.3" />
														<path d="M4,2 L16,2 C17.6568542,2 19,3.34314575 19,5 L19,19 C19,20.6568542 17.6568542,22 16,22 L4,22 C3.44771525,22 3,21.5522847 3,21 L3,3 C3,2.44771525 3.44771525,2 4,2 Z M11.1176481,13.709585 C10.6725287,14.1547043 9.99251947,14.2650547 9.42948307,13.9835365 C8.86644666,13.7020183 8.18643739,13.8123686 7.74131803,14.2574879 L6.2303083,15.7684977 C6.17542087,15.8233851 6.13406645,15.8902979 6.10952004,15.9639372 C6.02219616,16.2259088 6.16377615,16.5090688 6.42574781,16.5963927 L7.77956724,17.0476658 C9.07965249,17.4810276 10.5130001,17.1426601 11.4820264,16.1736338 L15.4812434,12.1744168 C16.3714821,11.2841781 16.5921828,9.92415954 16.0291464,8.79808673 L15.3965752,7.53294436 C15.3725414,7.48487691 15.3409156,7.44099843 15.302915,7.40299777 C15.1076528,7.20773562 14.7910703,7.20773562 14.5958082,7.40299777 L13.0032662,8.99553978 C12.5581468,9.44065914 12.4477965,10.1206684 12.7293147,10.6837048 C13.0108329,11.2467412 12.9004826,11.9267505 12.4553632,12.3718698 L11.1176481,13.709585 Z" fill="#000000" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Contacts</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/contacts/list-columns.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Columns</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/contacts/list-datatable.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Datatable</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/contacts/view-contact.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">View Contact</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/contacts/add-contact.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Add Contact</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/contacts/edit-contact.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Edit Contact</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
														<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Chat</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/chat/private.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Private</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/chat/group.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Group</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/chat/popup.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Popup</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
														<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Projects</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/projects/list-columns-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Columns 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/projects/list-columns-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Columns 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/projects/list-columns-3.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Columns 3</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/projects/list-columns-4.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Columns 4</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/projects/list-datatable.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">List - Datatable</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/projects/view-project.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">View Project</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/projects/add-project.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Add Project</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/projects/edit-project.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Edit Project</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
														<path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Support Center</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/support-center/home-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Home 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/support-center/home-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Home 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/support-center/faq-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">FAQ 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/support-center/faq-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">FAQ 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/support-center/faq-3.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">FAQ 3</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/support-center/feedback.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Feedback</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/support-center/license.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">License</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
														<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Todo</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/todo/tasks.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Tasks</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/todo/docs.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Docs</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/todo/files.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Files</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-list.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
														<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
														<rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1" />
														<rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1" />
														<rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1" />
														<rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1" />
														<rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1" />
														<rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Education</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">School</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/school/dashboard.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Dashboard</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/school/statistics.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Statistics</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/school/calendar.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Calendar</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/school/library.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Library</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/school/teachers.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Teachers</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/school/students.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Students</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Student</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/student/dashboard.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Dashboard</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/student/profile.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Profile</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/student/calendar.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Calendar</span>
																</a>
															</li>
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/student/classmates.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Classmates</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
												<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
													<a href="javascript:;" class="menu-link menu-toggle">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Class</span>
														<i class="menu-arrow"></i>
													</a>
													<div class="menu-submenu menu-submenu-classic menu-submenu-right">
														<ul class="menu-subnav">
															<li class="menu-item" aria-haspopup="true">
																<a href="custom/apps/education/class/dashboard.html" class="menu-link">
																	<i class="menu-bullet menu-bullet-line">
																		<span></span>
																	</i>
																	<span class="menu-text">Dashboard</span>
																</a>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
										<a href="javascript:;" class="menu-link menu-toggle">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">eCommerce</span>
											<i class="menu-arrow"></i>
										</a>
										<div class="menu-submenu menu-submenu-classic menu-submenu-right">
											<ul class="menu-subnav">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/ecommerce/dashboard.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Dashboard 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/ecommerce/dashboard-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Dashboard 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/ecommerce/dashboard-3.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Dashboard 3</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/ecommerce/product-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Product 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/ecommerce/product-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Product 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/ecommerce/product-3.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Product 3</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/ecommerce/my-orders.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">My Orders</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/ecommerce/order-details.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Order Details</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/ecommerce/shopping-cart.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Shopping Cart</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/apps/ecommerce/checkout.html" class="menu-link">
														<i class="menu-bullet menu-bullet-dot">
															<span></span>
														</i>
														<span class="menu-text">Checkout</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
									<li class="menu-item" aria-haspopup="true">
										<a href="custom/apps/inbox.html" class="menu-link">
											<span class="svg-icon menu-icon">

												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
														<path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000" />
													</g>
												</svg>

												<!--end::Svg Icon-->
											</span>
											<span class="menu-text">Inbox</span>
											<span class="menu-label">
												<span class="label label-danger label-inline">new</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="menu-item menu-item-submenu" data-menu-toggle="click" aria-haspopup="true">
							<a href="javascript:;" class="menu-link menu-toggle">
								<span class="menu-text">Pages</span>
								<span class="menu-desc"></span>
								<i class="menu-arrow"></i>
							</a>
							<div class="menu-submenu menu-submenu-fixed menu-submenu-center" style="width:1150px">
								<div class="menu-subnav">
									<ul class="menu-content">
										<li class="menu-item">
											<h3 class="menu-heading menu-toggle">
												<span class="menu-text">Pricing Tables</span>
												<i class="menu-arrow"></i>
											</h3>
											<ul class="menu-inner">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/pricing/pricing-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Pricing Tables 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/pricing/pricing-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Pricing Tables 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/pricing/pricing-3.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Pricing Tables 3</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/pricing/pricing-4.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Pricing Tables 4</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<h3 class="menu-heading menu-toggle">
												<span class="menu-text">Wizards</span>
												<i class="menu-arrow"></i>
											</h3>
											<ul class="menu-inner">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/wizard/wizard-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Wizard 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/wizard/wizard-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Wizard 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/wizard/wizard-3.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Wizard 3</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/wizard/wizard-4.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Wizard 4</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/wizard/wizard-5.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Wizard 5</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/wizard/wizard-6.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Wizard 6</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<h3 class="menu-heading menu-toggle">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">Invoices</span>
												<i class="menu-arrow"></i>
											</h3>
											<ul class="menu-inner">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/invoices/invoice-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Invoice 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/invoices/invoice-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Invoice 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/invoices/invoice-3.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Invoice 3</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/invoices/invoice-4.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Invoice 4</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/invoices/invoice-5.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Invoice 5</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/invoices/invoice-6.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Invoice 6</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<h3 class="menu-heading menu-toggle">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">Login</span>
												<i class="menu-arrow"></i>
											</h3>
											<ul class="menu-inner">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/login/login-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Login 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/login/login-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Login 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/login/login-3/signup.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Login 3</span>
														<span class="menu-label">
															<span class="label label-inline label-info">Wizard</span>
														</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/login/login-4/signup.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Login 4</span>
														<span class="menu-label">
															<span class="label label-inline label-info">Wizard</span>
														</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<h3 class="menu-heading menu-toggle">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">Classic Login</span>
												<i class="menu-arrow"></i>
											</h3>
											<ul class="menu-inner">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/login/classic/login-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Login 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/login/classic/login-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Login 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/login/classic/login-3.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Login 3</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/login/classic/login-4.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Login 4</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/login/classic/login-5.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Login 5</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/login/classic/login-6.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Login 6</span>
													</a>
												</li>
											</ul>
										</li>
										<li class="menu-item">
											<h3 class="menu-heading menu-toggle">
												<i class="menu-bullet menu-bullet-dot">
													<span></span>
												</i>
												<span class="menu-text">Error Pages</span>
												<i class="menu-arrow"></i>
											</h3>
											<ul class="menu-inner">
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/error/error-1.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Error 1</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/error/error-2.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Error 2</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/error/error-3.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Error 3</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/error/error-4.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Error 4</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/error/error-5.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Error 5</span>
													</a>
												</li>
												<li class="menu-item" aria-haspopup="true">
													<a href="custom/pages/error/error-6.html" class="menu-link">
														<i class="menu-bullet menu-bullet-line">
															<span></span>
														</i>
														<span class="menu-text">Error 6</span>
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
						</li>
					</ul>

					<!--end::Header Nav-->
				</div>

				<!--end::Header Menu-->
			</div>

			<!--end::Header Menu Wrapper-->
		</div>

		<!--end::Left-->

		<!--begin::Topbar-->
		<div class="topbar">

			<!--begin::Search-->
			<div class="dropdown">

				<!--begin::Toggle-->
				<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
					<div class="btn btn-icon btn-hover-transparent-white btn-lg btn-dropdown mr-1">
						<span class="svg-icon svg-icon-xl">

							<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
									<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
								</g>
							</svg>

							<!--end::Svg Icon-->
						</span>
					</div>
				</div>

				<!--end::Toggle-->

				<!--begin::Dropdown-->
				<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">

					@include('partials._extras.dropdown.search-dropdown')
				</div>

				<!--end::Dropdown-->
			</div>

			<!--end::Search-->

			<!--begin::Notifications-->
			<div class="dropdown">

				<!--begin::Toggle-->
				<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
					<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1 pulse pulse-primary">
						<span class="svg-icon svg-icon-xl">

							<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
									<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
								</g>
							</svg>

							<!--end::Svg Icon-->
						</span>
						<span class="pulse-ring"></span>
					</div>
				</div>

				<!--end::Toggle-->

				<!--begin::Dropdown-->
				<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
					<form>

						@include('partials._extras.dropdown.notifications')
					</form>
				</div>

				<!--end::Dropdown-->
			</div>

			<!--end::Notifications-->

			<!--begin::Quick Actions-->
			<div class="dropdown">

				<!--begin::Toggle-->
				<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
					<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
						<span class="svg-icon svg-icon-xl">

							<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
									<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
									<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
									<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
								</g>
							</svg>

							<!--end::Svg Icon-->
						</span>
					</div>
				</div>

				<!--end::Toggle-->

				<!--begin::Dropdown-->
				<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">

					@include('partials._extras.dropdown.quick-actions')
				</div>

				<!--end::Dropdown-->
			</div>

			<!--end::Quick Actions-->

			<!--begin::My Cart-->
			<div class="dropdown">

				<!--begin::Toggle-->
				<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
					<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
						<span class="svg-icon svg-icon-xl">

							<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart3.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
									<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000" />
								</g>
							</svg>

							<!--end::Svg Icon-->
						</span>
					</div>
				</div>

				<!--end::Toggle-->

				<!--begin::Dropdown-->
				<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-xl dropdown-menu-anim-up">
					<form>

						@include('partials._extras.dropdown.cart')
					</form>
				</div>

				<!--end::Dropdown-->
			</div>

			<!--end::My Cart-->

			<!--begin::Quick panel-->
			<div class="topbar-item">
				<div class="btn btn-icon btn-hover-transparent-white btn-lg mr-1" id="kt_quick_panel_toggle">
					<span class="svg-icon svg-icon-xl">

						<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<rect x="0" y="0" width="24" height="24" />
								<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
								<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
							</g>
						</svg>

						<!--end::Svg Icon-->
					</span>
				</div>
			</div>

			<!--end::Quick panel-->

			<!--begin::Languages-->
			<div class="dropdown">

				<!--begin::Toggle-->
				<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
					<div class="btn btn-icon btn-hover-transparent-white btn-dropdown btn-lg mr-1">
						<img class="h-20px w-20px rounded-sm" src="{{ asset('assets/media/svg/flags/226-united-states.svg') }}" alt="" />
					</div>
				</div>

				<!--end::Toggle-->

				<!--begin::Dropdown-->
				<div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">

					@include('partials._extras.dropdown.languages')
				</div>

				<!--end::Dropdown-->
			</div>

			<!--end::Languages-->

			<!--begin::User-->
			<div class="dropdown">

				<!--begin::Toggle-->
				<div class="topbar-item">
					<div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto" id="kt_quick_user_toggle">
						<span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
						<span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4">Sean</span>
						<span class="symbol symbol-35">
							<span class="symbol-label text-white font-size-h5 font-weight-bold bg-white-o-30">S</span>
						</span>
					</div>
				</div>

				<!--end::Toggle-->
			</div>

			<!--end::User-->
		</div>

		<!--end::Topbar-->
	</div>

	<!--end::Container-->
</div>

<!--end::Header-->