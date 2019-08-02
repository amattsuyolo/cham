<!--   
需要寄信的程式碼
表單建立
辦一個新的gmail
line id......
增加google地圖
--> 




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">＊客服郵箱</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="contact-form"  id="contactUsForm" action="/contact" method="get" onsubmit="closeModal()">
			        {{ csrf_field()}}
					<div class="form-group row">
						<label   for="colFormLabel" class="col-sm-2 col-form-label"><span class="label-first">邮</span>箱</label>
						<div class="col-sm-10">
						<input  name="emailContact" type="email" class="form-control" id="colFormLabel" placeholder="">
						</div>
					</div>
					<div class="form-group row">
						<label for="colFormLabel" class="col-sm-2 col-form-label"> <span class="label-first">姓</span>名</label>
						<div class="col-sm-10">
						<input name="nameContact"  class="form-control" id="colFormLabel" placeholder="">
						</div>
					</div>
					<div class="form-group row">
						<label for="colFormLabel" class="col-sm-2 col-form-label"><span class="label-first">内</span>容</label>
						<div class="col-sm-10">
						<!-- <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label"> -->
						<textarea name="messageContact" class="form-control" rows="4"></textarea>
						</div>
					</div>
					<div class="form-foot"  style="margin:50px 14px 0px 37px" > 
						<div class=" row justify-content-between"  >

							<button  type="submit"  class="form-btn btn btn-success" >確認</button>

							<button type="button"   class="form-btn btn btn-secondary" data-dismiss="modal">取消</button>

						</div>
					</div>

				</form>
      </div>
      <!-- <div class="modal-footer justify-content-around">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<!-- Footer https://mdbootstrap.com/docs/jquery/navigation/footer/ -->
<footer class="page-footer font-small unique-color-dark pt-4">

    <!-- Footer Elements -->
    <div id="contact-us" class="container">

      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          聯絡我們
            </button>
        <!-- <li class="list-inline-item">
          <h5 class="mb-1">Register for free</h5>
        </li> -->
        <!-- <li class="list-inline-item">
          <a href="#!" class="btn btn-outline-white btn-rounded">Sign up!</a>
        </li> -->
      </ul>
      <!-- Call to action -->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/">白熊咖啡</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->