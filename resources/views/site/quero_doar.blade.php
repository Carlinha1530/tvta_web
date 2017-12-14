@extends('layouts.site')

@section('pagina_titulo', 'Doar')

@section('content')
	<link rel="stylesheet" href="css/panel_price.css">
	<div class="wrap_6 wrap_7">
	    <div class="row">
	        <div class="col-md-12">
	            <h3 class="header_2 text_6 color_1 bg_3 wow fadeInLeft" data-wow-delay=".2s">Quero Doar</h3>
				
				<div class="caption_2" >
	                <h4 class="text_11 color_3 wow fadeInRight">
	                    Obrigado por considerar fazer uma doação!<br>					
	                    Somos um ministério sem fins lucrativos. Não fazemos propaganda comercial e oferecemos tudo gratuitamente.<br><br>
						Atualmente a TV Terceiro Anjo funciona pela Graça de Deus através de voluntariosos cristãos que compartilham conosco de suas bênçãos.
						<br> Muito obrigado por nos ajudar!
	                </h4>
	            </div><br><br>

	            <div class="col-md-3 text-center wow fadeInLeft">
	                <div class="panel panel-success panel-pricing ">
	                    <div class="panel-heading">
	                       	<img src="img/bancos/pagseguro1.png" height="70" width="70" alt=""><br><br>
	                        <h4 class="text_11">PagSeguro</h4>
	                    </div>
	                    <div class="panel-footer">
	                        <form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post" target="pagseguro">
	                            <input name="receiverEmail" type="hidden" value="contato@terceiroanjo.com">
				                <input name="currency" type="hidden" value="BRL"><br>
				                <input alt="Pague com PagSeguro - é rápido, grátis e seguro!" name="submit" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/205x30-doar-azul.gif" type="image">
			                </form>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-3 text-center wow fadeInLeft">
	                <div class="panel panel-info panel-pricing ">
	                    <div class="panel-heading">
	                        <img src="img/bancos/paypal3.png" height="60" width="60" alt=""><br><br>
	                        <h4 class="text_11">PayPal</h4>
	                    </div>
	                    <div class="panel-footer">
	                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	                            <input name="cmd" type="hidden" value="_s-xclick">
								<input name="hosted_button_id" type="hidden" value="MHAMUGDLX22X6">
								<input alt="PayPal - A maneira mais fácil e segura de efetuar pagamentos online!" name="submit" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_donateCC_LG.gif" type="image">
								<img src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" alt="" width="1" height="1" border="0">
							</form>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-3 text-center wow fadeInLeft">
	                <div class="panel panel-danger panel-pricing ">
	                    <div class="panel-heading">
	                        <img src="img/bancos/bradesco.png" height="70" width="70" alt=""><br><br>
	                        <h4 class="text_11">Bradesco</h4>
	                    </div>
	                    <div class="panel-footer">
	                        <a class="btn btn-lg btn-block btn-success" href="#" data-toggle="modal" data-target=".bradesco">
							Depósito em Conta</a>
	                    </div>
	                </div>
	            </div>

	            <div class="col-md-3 text-center wow fadeInLeft">
	                <div class="panel panel-warning panel-pricing ">
	                    <div class="panel-heading">
	                        <img src="img/bancos/bb.png" height="70" width="70" alt=""><br><br>
	                        <h4 class="text_11">Banco do Brasil</h4>
	                    </div>
	                    <div class="panel-footer">
	                        <a class="btn btn-lg btn-block btn-success" href="#" data-toggle="modal" data-target=".bb">
							Depósito em Conta</a>
	                    </div>
	                </div>
	            </div><br><br><br>	
	        </div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
	    		<div class="caption_2">
	                <h4 class="text_7 color_3 wow fadeInRight">
	                    <strong>ASDEIH Brasil CNPJ: 15.499.249/0001-60 </strong><br><br>
						<div class="alert alert-danger" role="alert">
							<strong style="font-size: 20px;">Favor não doar dízimos, os mesmos devem ser levados à sua igreja local.
							</strong>	
						</div>
	                </h4>
						
	            </div>
	    	</div>
	    </div>
	</div>
	
	<!-- Modal bradesco-->
	<div class="modal fade bradesco" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	    <div class="modal-dialog modal-lg" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h1 class="modal-title text_11 color_3" id="myModalLabel"><strong>Depósitos com o Bradesco </strong></h1>
	            </div>
	            <div class="modal-body">
	            	<div class="row">
		            	<div class="col-md-2">
		            		<img src="img/bancos/bradesco.png" height="70" width="70" alt="">
		            	</div>
		            	<div class="col-md-10 text_7 color_3">
		            		<strong>ASDEIH Brasil </strong> <br><br>
		            		<strong>Agência: </strong> 0892-3 <br><br>
		            		<strong>C/C: </strong> 15537-3 <br>
		            	</div>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div>

	<!-- Modal bb-->
	<div class="modal fade bb" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	    <div class="modal-dialog modal-lg" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                <h4 class="modal-title text_12 color_3" id="myModalLabel"><strong>Depósitos com o Banco do Brasil  </strong></h4>
	            </div>
	            <div class="modal-body">
	            	<div class="row">
		            	<div class="col-md-2">
		            		<img src="img/bancos/bb.png" height="70" width="70" alt="">
		            	</div>
		            	<div class="col-md-10 text_12 color_3">
		            		<strong>ASDEIH BRASIL </strong> <br><br>
		            		<strong>Agência: </strong> 3104-6 <br><br>
		            		<strong>C/C: </strong> 14700-1 <br>
		            	</div>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div>

@endsection