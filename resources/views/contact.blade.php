@extends('layout.master')
@section('content')


	<!-- Title page -->
	<section class="bg-img1 kit-overlay1" style="background-image: url(images/bg-05.jpg);">
		<div class="container size-h-3 p-tb-30 flex-col-c-c">
			<h2 class="t1-b-1 text-uppercase cl-0 txt-center m-b-25">
				تواصل معنا
			</h2>

			<div class="flex-wr-c-c">
				<a href="/" class="breadcrumb-item">
					الرئيسية
				</a>

				<span class="breadcrumb-item">
تواصل معنا				</span>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section class="bg-0 p-t-95 p-b-40">
		<div class="container">
			<div class="row contact-content">
				<div class="col-sm-10 col-md-12 p-b-60">
					<h3 class="t1-m-5 cl-3 m-b-44" style="text-align: center">
						ارسل رسالتك
					</h3>

					<form id="contact-form" class="validate-form" method="post" action="includes/contact-form.php" name="contact" style="direction: rtl">
						<div class="m-b-15 validate-input" data-validate = "Name is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="name" placeholder="اسمك">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Valid email is: ex@abc.xyz">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="email" placeholder="بريدك الإلكترونى">
						</div>

						<div class="m-b-15 validate-input" data-validate = "Phone is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder="رقم التلفون">
						</div>

                        <div class="m-b-15 validate-input" data-validate = "Phone is required">
							<input class="size-a-3 t1-m-2 plh-6 cl-6 p-rl-20 bo-1-rad-4 bcl-12 focus-in1" type="text" name="phone" placeholder=" موضوع الرسالة">
						</div>

						<div class="m-b-30 validate-input" data-validate = "Message is required">
							<textarea class="size-a-14 t1-m-2 plh-6 cl-6 p-rl-20 p-tb-13 bo-1-rad-4 bcl-12 focus-in1" name="msg" placeholder="نص الرسالة"></textarea>
						</div>

						<button class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15" style="float: right">
							ارسل رسالتك
						</button>
					</form>
				</div>


			</div>
		</div>
	</section>

	<!-- Map -->
	<div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3623.655629146777!2d46.65569947536682!3d24.738700278008967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjTCsDQ0JzE5LjMiTiA0NsKwMzknMjkuOCJF!5e0!3m2!1sen!2seg!4v1710840337312!5m2!1sen!2seg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    @endsection
