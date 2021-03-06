@extends('layouts.usaha.basic')

@section('title'){{$usaha->nama}}@endsection

@section('css')
<style media="screen">
  :root {
    --primer: #27ae60;
    --sekunder: #ffffff;
  }
</style>
@endsection
@section('content')

<!-- Header -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#1d3650" style="background-color: rgb(29, 54, 80);">
	<tr>
		<td align="center" style="background-image: url('{{ asset(`template-usaha/basic/images/header_bg.jpg`) }}'); background-position: center top; background-repeat:no-preat!important; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-repeat: no-repeat;" id="BGheaderChange">
			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center">

						<!-- Nav Mobile Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- SORTABLE -->
									<div class="sortable_inner ui-sortable">

									<!-- Start Nav -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full" object="drag-module-small">
										<tr>
											<td width="100%" valign="middle" align="center" class="logo">

												<!-- Logo -->
												<table width="120" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
													<tr>
														<td height="62" valign="middle" align="center" width="100%" class="fullCenter" style="line-height: 1px;" >
															<a href="#" style="text-decoration: none;">
																<img src="{{ asset('assets/logo_emblem.png') }}" width="65" alt="" border="0"  class="hover">
															</a>
														</td>
													</tr>
												</table>
												<!-- Buy Now -->
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="right" style="text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
													<tr>
														<td width="100%" height="0" style="font-size: 1px; line-height: 1px;" class="h20">&nbsp;</td>
													</tr>
													<tr>
														<td height="70" valign="middle" width="100%"  style="font-family: Helvetica, Arial, sans-serif; color: var(--primer); text-transform: uppercase;">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><a href="#" style="text-decoration: none; color: var(--primer);" class="underline">Buy Now!</a></span>
														</td>
													</tr>
												</table>

												<!-- Nav -->
												<table width="340" border="0" cellpadding="0" cellspacing="0" align="right" style="text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
													<tr>
														<td width="100%" height="0" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td height="70" valign="middle" width="100%"  style="font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase;"class="h40">
														</td>
													</tr>
												</table>

											</td>
										</tr>
										<tr>
											<td width="100%" height="10">
											</td>
										</tr>
									</table>
									<!-- End Nav -->

									</div>


									<!-- SORTABLE -->
									<div class="sortable_inner ui-sortable">

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="30" width="100%">
											</td>
										</tr>
									</table><!-- End Space -->

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="40" width="100%">
											</td>
										</tr>
									</table><!-- End Space -->
									<!-- Text -->
									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td align="center" width="100%" style="font-size: 40px; color: rgb(255, 255, 255); text-align: center; font-family: Helvetica, Arial, sans-serif; font-weight: bold; vertical-align: top;" class="font32">
														<span style="color: var(--primer); font-weight: bold;" class="font36">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight:normal; word-break: break-word;">
																{!!$usaha->website->judul_jumbotron!!}
															</span>
														</span>
														<span style="color: rgb(255, 255, 255); font-weight: 100;" class="font36">
															<span style="font-family: 'proxima_novalight', Helvetica; font-weight:normal; word-break: break-word;">
																<br class="erase">
																{!!$usaha->website->teks_jumbotron!!}
															</span>
														</span>
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="60" width="100%"></td>
										</tr>
									</table>

									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter" object="drag-module-small">
										<tr>
											<td width="100%" align="center">

												<!-- Centered Buttons -->
												<table border="0" cellpadding="0" cellspacing="0" align="center" class="mcenter">
												<!--[if mso]><v:shape><table width="58%" border="0" cellpadding="0" cellspacing="0" align="center""></v:shape><![endif]-->
													<tr>
														<td width="100%" align="center">


															<table border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; margin-right: 13px;" class="mcenter">
																<tr>
																	<td width="100%" align="center">

																		<table border="0" cellpadding="0" cellspacing="0" align="left" class="mcenter">
																			<tr>
																				<td align="right" height="38" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

																					<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																						<a href="#produk" class="btn" style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Produk</a>
																					</span>
																				</td>
																			</tr>
																		</table>

																	</td>
																</tr>
																<tr>
																	<td height="0" class="h20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
																</tr>
															</table>


															<table border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; margin-left: 13px;" class="mcenter">
																<tr>
																	<td width="auto" align="center">

																		<table border="0" cellpadding="0" cellspacing="0" align="right" style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; border: 2px solid rgb(255, 255, 255); color: rgb(255, 255, 255);">
																			<tr>
																				<td width="auto" align="center" height="34" style="font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: rgb(255, 255, 255);">
																					<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																						<a href="#" data-toggle="modal" class="btn" data-target=".modal-detail" style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;" class="underline">Detail</a>
																					</span>
																				</td>
																			</tr>
																		</table>
                                    @include('usaha.basic.detail')

																	</td>
																</tr>
															</table>

														</td>
													</tr>
												</table><!-- End 2 Buttons -->

											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="50" width="100%">
											</td>
										</tr>
									</table><!-- End Space -->

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="50" width="100%">
											</td>
										</tr>
									</table><!-- End Space -->

									</div><!-- End SORTABLE -->

								</td>
							</tr>
						</table>

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>
<!-- Header End -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#ffffff"style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">

			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Icon 1 -->
									<table width="180" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image100">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/image_100px_1.png') }}" width="100" alt="" border="0" ></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Fully Tested</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Online marketing will be dominated by dynamic content marketing.</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="30" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Icon 2 -->
									<table width="180" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image100">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/image_100px_2.png') }}" width="100" alt="" border="0" ></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Great Features</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Online marketing will be dominated by dynamic content marketing.</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Icon 3 -->
									<table width="180" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image100">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/image_100px_3.png') }}" width="100" alt="" border="0" ></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Awesome Design</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Online marketing will be dominated by dynamic content marketing.</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 --> -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Column Left -->
									<table width="290" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); -moz-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); box-shadow: 0px 2px 0px 0px rgba(173, 173, 173, 0.3);" class="fullCenter">
										<tr>
											<td valign="top" width="100%" class="pad30" bgcolor="#ffffff"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; background-color: rgb(255, 255, 255);">


												<table width="240" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td width="100" align="center" class="image50">
															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
																<tr>
																	<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_1.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td align="center" valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Fantastic coding Headphones for the Win!</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td align="center" valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Online marketing in 2014 will be dominated by dynamic content (blogging) and social media. Next year social media marketing will no longer</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="30"></td>
													</tr>
													<!----------------- Button Center ----------------->
													<tr>
														<td class="buttonScale" width="auto" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" class="buttonScale">
																<tr>
																	<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

																		<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																			<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
																		</span>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table><!-- End Space -->

									<!-- Column Right -->
									<table width="290" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); -moz-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); box-shadow: 0px 2px 0px 0px rgba(173, 173, 173, 0.3);" class="fullCenter">
										<tr>
											<td valign="top" width="100%" class="pad30" bgcolor="#ffffff"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; background-color: rgb(255, 255, 255);">


												<table width="240" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td width="100" align="center" class="image50">
															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
																<tr>
																	<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_2.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td align="center" valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">2015’s Best Back to School Headphones</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td align="center" valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Over the last few years SEO’s have debated on whether social signals have any effect on search results and if they do how much weight do these </span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="30"></td>
													</tr>
													<!----------------- Button Center ----------------->
													<tr>
														<td class="buttonScale" width="auto" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" class="buttonScale">
																<tr>
																	<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

																		<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																			<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
																		</span>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 --> -->

<!-- Seperator 1 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="var(--primer)" style="background-color: var(--primer);">
	<tr>
		<td align="center" style="background-image: url('images/seperator1.jpg'); background-position: center top; background-repeat:no-preat!important; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-repeat: no-repeat;" id="sep1">


			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center">

						<!-- Wrapper -->
						<table class="full" align="center" border="0" width="600" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%" align="center">

									<!-- Text -->
									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" align="center">
										<tr>
											<td height="60" width="100%" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td width="100" align="center" class="image80">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;"  align="center"><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_80px_1.png') }}" width="80" alt="" border="0"  class="hover"></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="top" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(255, 255, 255); line-height: 26px; font-weight: bold;"class="fullCenter" >
												<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
													Cindy Theron
												</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(255, 255, 255); line-height: 22px;" class="fullCenter">
												<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span>
											</td>
										</tr>
										<tr>
											<td height="40" width="100%" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<!----------------- Button Center ----------------->
										<tr>
											<td width="auto" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; border: 2px solid rgb(255, 255, 255); color: rgb(255, 255, 255);">
													<tr>
														<td width="auto" align="center" height="35" style="font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: rgb(255, 255, 255);">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																<a href="#" style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;" class="underline">About me</a>
															</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
										<!----------------- End Button Center ----------------->
										<tr>
											<td height="60" width="100%" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

								</td>
							</tr>
						</table>

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>
<!-- Seperator 1 End -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#ffffff"style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="30"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center" class="image198">

									<!-- Image 198px - 1 -->
									<table width="198" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="100%" align="center" class="fullCenter" style="line-height: 1px;" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_198px_1.png') }}" width="198" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
									</table>

									<!-- Image 198px - 2 -->
									<table width="198" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="100%" align="center" class="fullCenter" style="line-height: 1px;" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_198px_2.png') }}" width="198" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
									</table>

									<!-- Image 198px - 3 -->
									<table width="198" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="100%" align="center" class="fullCenter" style="line-height: 1px;" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_198px_3.png') }}" width="198" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="18"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);"> -->
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="18"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Text Right -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
										<tr>
											<td valign="top" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 22px; color: rgb(1, 1, 1); line-height: 28px; font-weight: bold;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">
													Go Anywhere with our new Serie of Summer Headphones
												</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="20"></td>
										</tr>
										<tr>
											<td width="100%" valign="top" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 24px; font-weight: normal;" class="fullCenter">

													<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">
														Many website owners may find themselves confused or deflated by the lack of traffic their website is bringing in especially when they’ve been working hard to achieve high rankings within the search engines and promoting themselves frequently on social networks but what could be causing the websites downfall?
													</span>
												<p>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>

										<tr>
											<td class="buttonScale" width="auto" align="left">

												<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr> -->
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);"> -->
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="45"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);"> -->
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="15"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Column Left -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); -moz-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); box-shadow: 0px 2px 0px 0px rgba(173, 173, 173, 0.3);" class="fullCenter">
										<tr>
											<td valign="top" width="100%" class="pad30" bgcolor="#ffffff"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; background-color: rgb(255, 255, 255);">

												<!-- Space -->
												<table width="40" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="erase">
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table><!-- End Space -->

												<!-- Space -->
												<table width="40" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="erase">
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table><!-- End Space -->

												<table width="142" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td width="100" align="center" class="image142">
															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
																<tr>
																	<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_142px_1.png') }}" width="142" alt="" border="0"  class="hover"></a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table>

												<table width="330" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;" class="erase">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">What are you waiting for? Save 10% on select models until Jan 10th</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Basic search engine optimisation is essential for any website. SEO will help your website to be found within the search engines keywords relating to...</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<!----------------- Button Center ----------------->
													<tr>
														<td class="buttonScale" width="auto" align="left">

															<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
																<tr>
																	<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

																		<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																			<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
																		</span>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="15"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);"> -->
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="15"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Column Left -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); -moz-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); box-shadow: 0px 2px 0px 0px rgba(173, 173, 173, 0.3);" class="fullCenter">
										<tr>
											<td valign="top" width="100%" class="pad30" bgcolor="#ffffff"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; background-color: rgb(255, 255, 255);">

												<!-- Space -->
												<table width="40" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="erase">
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table><!-- End Space -->

												<!-- Space -->
												<table width="40" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="erase">
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table><!-- End Space -->

												<table width="142" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td width="100" align="center" class="image142">
															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
																<tr>
																	<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_142px_2.png') }}" width="142" alt="" border="0"  class="hover"></a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>

												<table width="330" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Here’s some of Headroom Staffers Enjoying Epic Summers</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Basic search engine optimisation is essential for any website. SEO will help your website to be found within the search engines keywords relating to...</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="30"></td>
													</tr>
													<!----------------- Button Center ----------------->
													<tr>
														<td class="buttonScale" width="auto" align="left">

															<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
																<tr>
																	<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

																		<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																			<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
																		</span>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="15"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);"> -->
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="45"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" > -->
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="var(--primer)"style="background-color: var(--primer);">
				<tr>
					<td align="center">

						<!-- Column Left -->
						<table width="50%" border="0" cellpadding="0" cellspacing="0" align="left" class="full" style="border-collapse: collapse; text-align: center; background-color: var(--primer);" bgcolor="var(--primer)">
							<tr>
								<td width="100%" align="center">

									<!-- Space -->
									<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
										<tr>
											<td width="100%" height="38"></td>
										</tr>
									</table><!-- End Space -->

									<!-- Wrapper -->
									<table width="300" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile">
										<tr>
											<td width="100%" align="center">

												<!-- Text Left -->
												<table width="250" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(255, 255, 255); line-height: 24px; font-weight: normal;"class="fullCenter" >
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Unheard and Never Seen Before Combo Sale</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="24" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(255, 255, 255); line-height: 22px;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Many website owners may find themselves confused or deflated by the lack of traffic their website is bringing in especially when they’ve been working what could be causing the websites downfall?</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="38">
														</td>
													</tr>
												</table><!-- End Wrapper -->

											</td>
										</tr>
									</table><!-- End Wrapper -->

								</td>
							</tr>
						</table><!-- End Column Left -->

						<!-- Column Right -->
						<table width="49%" border="0" cellpadding="0" cellspacing="0" align="right" class="full" bgcolor="#1d3650" style="border-collapse: collapse; text-align: center; background-color: rgb(29, 54, 80);">
							<tr>
								<td width="100%" align="center" bgcolor="#1d3650"style="background-color: rgb(29, 54, 80);">

									<!-- 3 Icons Top -->
									<table width="300" border="0" cellpadding="0" cellspacing="0" align="left" class="full" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
										<tr>
											<td width="100%" align="center" valign="top">

												<!-- SORTABLE -->
												<div class="sortable_inner ui-sortable">

												<!-- 3 Icons Top -->
												<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" class="full" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" object="drag-module-small">
													<tr>
														<td width="100%" align="center" valign="top" class="icon100">

															<!-- 3 x 100px Icons Top -->
															<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="tableCenter">
																<tr>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_1.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_2.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td><td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_3.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																</tr>
															</table><!-- End Wrapper -->

														</td>
													</tr>
												</table>

												<!-- 3 Icons Middle -->
												<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" class="full" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" object="drag-module-small">
													<tr>
														<td width="100%" align="center" valign="top" class="icon100">

															<!-- 3 x 100px Icons Middle -->
															<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="tableCenter">
																<tr>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_4.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_5.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td><td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_6.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																</tr>
															</table><!-- End Wrapper -->

														</td>
													</tr>
												</table>

												<!-- 3 Icons Bottom -->
												<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" class="full" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" object="drag-module-small">
													<tr>
														<td width="100%" align="center" valign="top" class="icon100">

															<!-- 3 x 100px Icons Top -->
															<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="tableCenter">
																<tr>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_7.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_8.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td><td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_9.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																</tr>
															</table><!-- End Wrapper -->

														</td>
													</tr>
												</table><!-- End Wrapper -->

												</div>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Column Right -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);"> -->
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Image 600px - 1 -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="600" align="center" class="image600" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_600px_1.png') }}" width="600" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<tr>
											<td valign="top" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 22px; color: rgb(1, 1, 1); line-height: 28px; font-weight: bold;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">
													Sure-Fire Father’s Day Gifts
												</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="20"></td>
										</tr>
										<tr>
											<td width="100%" valign="top" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 24px; font-weight: normal;" class="fullCenter">

													<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">
														Many website owners may find themselves confused or deflated by the lack of traffic their website is bringing in especially when they’ve been working hard to achieve high rankings within the search engines and promoting themselves frequently on social networks but what could be causing the websites downfall?
													</span>
												<p>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Left, Scale Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="left">

												<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 3 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#f3f5f9" style="background-color: rgb(243, 245, 249);"> -->
	<tr>
		<td width="100%" align="center">


			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
							<tr>
								<td width="100%" height="50"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center" valign="top">

									<table width="296" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
										<tr>
											<td width="50%" style="text-align: center;" valign="top">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="50" align="center" class="image50">
																		<a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_3.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 30px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">98</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">PROJECTS FINISHED</span>
														</td>
													</tr>
												</table>

											</td>
											<td width="50%" style="text-align: center;" valign="top" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="50" align="center" class="image50">
																		<a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_4.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 30px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">23</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">cups of coffee</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table><!-- End Space -->

									<table width="296" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
										<tr>
											<td width="50%" style="text-align: center;" valign="top" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="50" align="center" class="image50">
																		<a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_5.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 30px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">87</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">awards won</span>
														</td>
													</tr>
												</table>

											</td>
											<td width="50%" style="text-align: center;" valign="top" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="50" align="center" class="image50">
																		<a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_6.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 30px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">99</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">happy customers</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper 2 -->

						<!-- Space -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="50"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>



<!-- Wrapper 5 (4 images top) -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" >
	<tr>
		<td width="100%" valign="top" bgcolor="#1d3650"style="background-color: rgb(29, 54, 80);">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
				<tr>
					<td>

						<!-- Wrapper -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" class="full">
							<tr>
								<td width="100%" class="image100Scale">

									<!-- 4x Images Top -->
									<table width="49%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width: 50%;" class="fullCenter">
										<tr>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_1.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_2.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
										</tr>
									</table>

									<table width="49%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width: 50%;" class="fullCenter">
											<tr><td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_3.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_4.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper 2 -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 5 -->


<!-- Wrapper 5 (4 images top) -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" >
	<tr>
		<td width="100%" valign="top" bgcolor="#1d3650"style="background-color: rgb(29, 54, 80);">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
				<tr>
					<td>

						<!-- Wrapper -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" class="full">
							<tr>
								<td width="100%" class="image100Scale">

									<!-- 4x Images Top -->
									<table width="49%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width: 50%;" class="fullCenter">
										<tr>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_5.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_6.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
										</tr>
									</table>

									<table width="49%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width: 50%;" class="fullCenter">
											<tr><td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_7.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_8.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper 2 -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 5 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="60"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Image 275px - 1 -->
									<table width="275" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="100%" align="center" class="image275" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_275px_1.png') }}" width="275" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25"></td>
										</tr>
										<tr>
											<td valign="top" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 26px; font-weight: bold;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">
													Try our New High Resolution Player
												</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="20"></td>
										</tr>
										<tr>
											<td width="100%" valign="top" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 24px; font-weight: normal;" class="fullCenter">

													<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">
														Online marketing in 2014 will be dominated by dynamic content (blogging) and social media. Next year social media marketing...
													</span>
												<p>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Left, Scale Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="left">

												<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="50" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table><!-- End Space -->

									<!-- Text Right -->
									<table width="280" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
										<tr>
											<td width="100%" align="center" class="image275" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_275px_2.png') }}" width="275" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25"></td>
										</tr>
										<tr>
											<td valign="top" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 26px; font-weight: bold;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">
													Ever Wondered why our Headphones get Makeovers?
												</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="20"></td>
										</tr>
										<tr>
											<td width="100%" valign="top" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 24px; font-weight: normal;" class="fullCenter">

													<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">
														Online marketing in 2014 will be dominated by dynamic content (blogging) and social media. Next year social media marketing...
													</span>
												<p>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Left, Scale Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="left">

												<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);"> -->
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="70"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Image 175px - 1 -->
									<table width="175" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image175">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_175px_1.png') }}" width="175" alt="" border="0"  class="hover"></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Quality</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Nullam id dolor id nibh.</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="36" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="50" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Image 175px - 2 -->
									<table width="175" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image175">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_175px_2.png') }}" width="175" alt="" border="0"  class="hover"></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Strength</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Nullam id dolor id nibh.</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="50" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Image 175px - 3 -->
									<table width="180" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image175">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_175px_3.png') }}" width="175" alt="" border="0"  class="hover"></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Detail</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Nullam id dolor id nibh.</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Seperator 3 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#1d3650" style="background-color: rgb(29, 54, 80);"> -->
	<tr>
		<td align="center" style="background-image: url('images/seperator2.jpg'); background-position: center top; background-repeat:no-preat!important; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-repeat: no-repeat;" id="sep2">


			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center">

						<!-- Wrapper -->
						<table class="full" align="center" border="0" width="600" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%" align="center">

									<!-- SORTABLE -->
									<div class="sortable_inner ui-sortable">

									<!-- Text -->
									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="55" width="100%">
											</td>
										</tr>
									</table>

									<table align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td width="200" align="center" style="text-align: center">

												<table align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="200" cellpadding="0" cellspacing="0">
													<tr>
														<td width="200" align="center" style="text-align: center" class="avatar89" >
															<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/avatar_80px_1.png') }}" width="80" alt="" border="0" class="hover" ></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>

									<!-- Text -->
									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="30" width="100%">
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 22px; color: var(--primer); line-height: 24px; font-weight: bold;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">We are known All Over The Globe</span>
											</td>
										</tr>
									</table>

									<!-- Text -->
									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="30" width="100%">
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td align="center" width="100%" style="font-size: 14px; color: rgb(255, 255, 255); text-align: center; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: bold; vertical-align: top; font-style: italic;">


														<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight:normal;">
														“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoet dolore magna aliquam erat volutpat.”</span>


											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="30" width="100%">
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(255, 255, 255); line-height: 20px; font-weight: bold;"class="fullCenter" >
												<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">Jonathan Strong</span>
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td align="center" width="100%" style="font-size: 14px; color: rgb(255, 255, 255); text-align: center; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: bold; vertical-align: top; font-style: italic;">


														<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight:normal;">Owner Music Group</span>


											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="55" width="100%">
											</td>
										</tr>
									</table>

									</div><!-- End SORTABLE -->

								</td>
							</tr>
						</table>

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>
<!-- Seperator 3 End -->

<!-- Wrapper 3 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#f3f5f9" style="background-color: rgb(243, 245, 249);"> -->
	<tr>
		<td width="100%" align="center">


			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
							<tr>
								<td width="100%" height="50"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center" valign="top">

									<!-- Headline -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 22px; color: rgb(1, 1, 1); line-height: 26px; font-weight: normal;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Our Sponsors</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="55" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<table width="296" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
										<tr>
											<td width="50%" style="text-align: center;" valign="top">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="100" align="center" class="image100" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/sponsor_100px_1.png') }}" width="100" alt="" border="0" class="hover" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
												</table>

											</td>
											<td width="50%" style="text-align: center;" valign="top" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="100" align="center" class="image100" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/sponsor_100px_2.png') }}" width="100" alt="" border="0" class="hover" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table><!-- End Space -->

									<table width="296" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
										<tr>
											<td width="50%" style="text-align: center;" valign="top">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="100" align="center" class="image100" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/sponsor_100px_3.png') }}" width="100" alt="" border="0" class="hover" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
												</table>

											</td>
											<td width="50%" style="text-align: center;" valign="top" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="100" align="center" class="image100" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/sponsor_100px_4.png') }}" width="100" alt="" border="0" class="hover" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper 2 -->

						<!-- Space -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#ffffff"style="background-color: rgb(255, 255, 255);"> -->
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="40"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Social Media -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
	<tr>
		<td align="center" valign="top">


			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>

						<!-- Wrapper -->
						<table class="full" align="center" border="0" width="600" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%">

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
										<tr>
											<td height="12" width="100%">
											</td>
										</tr>
									</table>

									<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" style="text-align: center;" class="fullCenter">
										<tr>
											<td valign="top" align="center">

												<table width="130" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
													<tr>
														<td width="17" align="center" class="icon17" >
															<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/social_icon_17px_1.png') }}" width="17" alt="" border="0" class="hover" ></a>
														</td>
														<td width="17" align="center" class="icon17" >
															<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/social_icon_17px_2.png') }}" width="17" alt="" border="0" class="hover" ></a>
														</td>
														<td width="17" align="center" class="icon17" >
															<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/social_icon_17px_3.png') }}" width="17" alt="" border="0" class="hover" ></a>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
										<tr>
											<td height="25" width="100%" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

								</td>
							</tr>
						</table>

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>
<!-- End Social Media -->

<!-- Unsubscribe -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
	<tr>
		<td align="center" valign="top">


			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>

						<!-- Wrapper -->
						<table class="full" align="center" border="0" width="600" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%">

									<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" style="text-align: center;" class="fullCenter">
										<tr>
											<td width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: rgb(135, 135, 135); line-height: 24px; word-break: break-word;"class="fullCenter" >




													<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">
													<a href="http://www.check_online.com" target="_blank" style="color: rgb(135, 135, 135); text-decoration: none;"class="underline" >Check online</a>
													</span>

													&nbsp; | &nbsp;

													<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">
													<!--subscribe--><a href="#" style="color: rgb(135, 135, 135); text-decoration: none;"class="underline" >Unsubscribe</a><!--unsub-->
													</span>

													&nbsp; | &nbsp;

													<span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;">
													<a href="mailto:infor@mail.com" target="_blank" style="color: rgb(135, 135, 135); text-decoration: none;"class="underline" >Forward to a friend</a>
													</span>



											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
										<tr>
											<td height="25" width="100%"></td>
										</tr>
										<tr>
											<td height="1" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

								</td>
							</tr>
						</table>

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>
<!-- Unsubscribe End -->

@endsection
