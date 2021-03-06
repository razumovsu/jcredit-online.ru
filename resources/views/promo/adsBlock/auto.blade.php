        <!-- Modal -->
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Заявка на автокредит онлайн</h4>
              </div>
              <div class="modal-body">
 				@if(count($data))             
				<div class="table-responsive">
                            <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                            	<th>Банк</th>
                                <th>Сумма автокредита</th>
                                <th>Срок</th>
                                <th>Ставка</th>
                                <th>Взнос %</th>
                                <th>Уже оформили</th>
                                <th>Заявка</th>
                                
                            </tr>
                            </thead>
                            <tbody>
				                @foreach($data as $v)
				                	@if($v->spec == '1') 
			                            <tr class="spec-offer-index">
			                                <td>
                                    			<span class="label label-info spec-offer-index-label" style="font-size: 13px; ">JCredit-Online.ru рекомендует!</span>			                                
			                                    <a href="{{ url() }}/go/to/{{ $v->id }}/type/a" target="_blank"><img class="img-responsive img-thumbnail" src="{{ url() }}/../resources/images/banks/{{ $v->pic_bank }}"></a>
			                                </td>                            
			                                <td>
						                        <p><small><span class="label label-info labelLarge">сумма от</span></small></p> <strong>{{ $v->sum_up }}</strong>
						                        <p><small><span class="label label-info labelLarge">сумма до</span></small></p> <strong>{{ $v->sum_down }}</strong>
			                                </td>
			                                <td>
						                        <p>до</p>
						                        <p>{{ $v->term }}</p>
						                        <p>мес.</p>
			                                </td>
			                                <td>
						                        <p>до</p>
						                        <p>{{ $v->rate }} %</p>
						                        <p>годовых</p>
			                                </td>
			                                <td>
                        						от <p class="lead"><strong>{{ $v->per_d_payment }}</strong></p>
			                                </td>
						                    <td>
						                        <p><strong>{{ $v->number_issued }}</strong></p>
						                        <p>человек</p>
						                    </td>			                                			                                
			                                <td>
			                                    <a href="{{ url() }}/go/to/{{ $v->id }}/type/a" target="_blank" class="btn btn-default btn btn-success btn-block btn-lg btnOffer">Оформить заявку</a>
			                                </td>
			                            </tr>
				                	@else
			                            <tr>
			                                <td>			                                
			                                    <a href="{{ url() }}/go/to/{{ $v->id }}/type/a" target="_blank"><img class="img-responsive img-thumbnail" src="{{ url() }}/../resources/images/banks/{{ $v->pic_bank }}"></a>
			                                </td>                            
			                                <td>
						                        <p><small><span class="label label-info labelLarge">сумма от</span></small></p> <strong>{{ $v->sum_up }}</strong>
						                        <p><small><span class="label label-info labelLarge">сумма до</span></small></p> <strong>{{ $v->sum_down }}</strong>
			                                </td>
			                                <td>
						                        <p>до</p>
						                        <p>{{ $v->term }}</p>
						                        <p>мес.</p>
			                                </td>
			                                <td>
						                        <p>до</p>
						                        <p>{{ $v->rate }} %</p>
						                        <p>годовых</p>
			                                </td>
			                                <td>
                        						от <p class="lead"><strong>{{ $v->per_d_payment }}</strong></p>
			                                </td>
						                    <td>
						                        <p><strong>{{ $v->number_issued }}</strong></p>
						                        <p>человек</p>
						                    </td>			                                			                                
			                                <td>
			                                    <a href="{{ url() }}/go/to/{{ $v->id }}/type/a" target="_blank" class="btn btn-default btn btn-success btn-block btn-lg btnOffer">Оформить заявку</a>
			                                </td>
			                            </tr>			                	
				                	@endif                          

                				@endforeach

                            </tbody>
                            </table>
              </div>
	            @else
	                <blockquote>Данные недоступны</blockquote>
	            @endif              
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <!-- <button type="button" class="btn btn-primary">Сохранить изменения</button> -->
              </div>