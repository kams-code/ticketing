@extends('layouts.main')



@section('content')
<section>
	<!-- Blog Section -->
	<div class="sample-page">
		<div class="container">
							<div class="row">
													<!-- Blog Content -->
													<div class="col-md-9">
                    	                        
															<div class="bbp_separator">
																<div class="title">
																	<h3 class="category-title">Archive</h3>    </div>
																<div class="short-line">
																	<img src="../../../themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/blue-line-short.png" class="img-responsive" alt="">
																</div>
															</div>
																						
																								
															<div id="bbpress-forums">
															
																
																	<div class="bbp-search-form">
															
																		
															<form role="search" method="get" id="bbp-search-form" action="https://bigbangthemes.net/TicketLab_WP/forums/search/">
																<div>
																	<label class="screen-reader-text hidden" for="bbp_search">Search for:</label>
																	<input type="hidden" name="action" value="bbp-search-request">
																	<input tabindex="101" type="text" value="" name="bbp_search" id="bbp_search">
																	<input tabindex="102" class="button" type="submit" id="bbp_search_submit" value="Search">
																</div>
															</form>
															
																	</div>
															
																	
																
																
																
																	
															
															
															<div class="forum-post" id="forums-list-0">
															
																
																	
															<div id="bbp-forum-827" class="loop-item-0 odd bbp-forum-status-open bbp-forum-visibility-publish post-827 forum type-forum status-publish has-post-thumbnail hentry forum_tax-account">
																<div>
															
															
																	
																				<div class="circle-live">
																			<div class="blue-circle">
																				<i class="fa fa-file-text-o"></i>
																			</div>
																		</div>
																			
																	<div class="description">
																		<div class="line-one">
																			
																			<a class="bbp-forum-title" href="forum/account-settings/index.html">Account Settings</a>
															
																						</div>
															
																		
																		<div class="line-two">
															
																			<i class="fa fa-bullhorn"></i> 82
																			<i class="fa fa-users"></i>61
																							<i class="fa fa-clock-o"></i> <a href="topic/hey-no-le-cazo/index.html" title="Private: hey no le cazo">4 days, 4 hours ago</a>							</div>
															
																		
																		<div class="line-three">
															
																			
																			<div class="bbp-forum-content">Not sure how to set your account up? Need some more info on what goes where? Feel free to ask away in this forum.</div>
															
																			
																		</div>
																	</div>
															
																</div>
															</div><!-- #bbp-forum-827 -->
															
																@foreach ($chatter_discussion as $item)
																<div id="bbp-forum-823" class="loop-item-1 even bbp-forum-status-open bbp-forum-visibility-publish post-823 forum type-forum status-publish has-post-thumbnail hentry forum_tax-api">
																	<div>
																
																
																		
																					<div class="circle-live">
																				<div class="blue-circle">
																					<i class="fa fa-file-text-o"></i>
																				</div>
																			</div>
																				
																		<div class="description">
																			<div class="line-one">
																				
																				<a class="bbp-forum-title" href="forum/api-documentation/index.html">{{$item['title']}}</a>
																
																							</div>
																
																			
																			<div class="line-two">
																
																				<i class="fa fa-bullhorn"></i> {{$item['views']}}
																				<i class="fa fa-users"></i>42
																								<i class="fa fa-clock-o"></i> <a href="topic/i-want-this-to-be-good/index.html" title="Private: i want this to be good">4 days, 21 hours ago {{$item['update_at']}}</a>							</div>
																
																			
																			<div class="line-three">
																
																				
																				<div class="bbp-forum-content">Looking to extend your website's functionality using our API? Get answers for your questions from our top notch support</div>
																
																				
																			</div>
																		</div>
																
																	</div>
																</div>
																@endforeach
																	
															<!-- #bbp-forum-823 -->
															
																
																	
															<div id="bbp-forum-825" class="loop-item-2 odd bbp-forum-status-open bbp-forum-visibility-publish post-825 forum type-forum status-publish has-post-thumbnail hentry forum_tax-billing">
																<div>
															
															
																	
																				<div class="circle-live">
																			<div class="blue-circle">
																				<i class="fa fa-file-text-o"></i>
																			</div>
																		</div>
																			
																	<div class="description">
																		<div class="line-one">
																			
																			<a class="bbp-forum-title" href="forum/billing-info/index.html">Billing Info</a>
															
																						</div>
															
																		
																		<div class="line-two">
															
																			<i class="fa fa-bullhorn"></i> 21
																			<i class="fa fa-users"></i>38
																							<i class="fa fa-clock-o"></i> <a href="topic/eyer/index.html" title="eyer">2 hours, 34 minutes ago</a>							</div>
															
																		
																		<div class="line-three">
															
																			
																			<div class="bbp-forum-content">All billing-related questions should be addressed in this forum. This way a professional will be able help you out.</div>
															
																			
																		</div>
																	</div>
															
																</div>
															</div><!-- #bbp-forum-825 -->
															
																
																	
															<div id="bbp-forum-821" class="loop-item-3 even bbp-forum-status-open bbp-forum-visibility-publish post-821 forum type-forum status-publish has-post-thumbnail hentry forum_tax-copyright-legal">
																<div>
															
															
																	
																				<div class="circle-live">
																			<div class="blue-circle">
																				<i class="fa fa-file-text-o"></i>
																			</div>
																		</div>
																			
																	<div class="description">
																		<div class="line-one">
																			
																			<a class="bbp-forum-title" href="forum/copyright-legal/index.html">Copyright &amp; Legal</a>
															
																						</div>
															
																		
																		<div class="line-two">
															
																			<i class="fa fa-bullhorn"></i> 14
																			<i class="fa fa-users"></i>53
																							<i class="fa fa-clock-o"></i> <a href="topic/test-8/index.html" title="test">3 months, 1 week ago</a>							</div>
															
																		
																		<div class="line-three">
															
																			
																			<div class="bbp-forum-content">Our company's lawyers are just a few clicks away. Ask anything about copyrights or licenses and get started right away.</div>
															
																			
																		</div>
																	</div>
															
																</div>
															</div><!-- #bbp-forum-821 -->
															
																
																	
															<div id="bbp-forum-829" class="loop-item-4 odd bbp-forum-status-open bbp-forum-visibility-publish post-829 forum type-forum status-publish has-post-thumbnail hentry forum_tax-privacy">
																<div>
															
															
																	
																				<div class="circle-live">
																			<div class="blue-circle">
																				<i class="fa fa-file-text-o"></i>
																			</div>
																		</div>
																			
																	<div class="description">
																		<div class="line-one">
																			
																			<a class="bbp-forum-title" href="forum/privacy/index.html">Privacy</a>
															
																						</div>
															
																		
																		<div class="line-two">
															
																			<i class="fa fa-bullhorn"></i> 6
																			<i class="fa fa-users"></i>5
																							<i class="fa fa-clock-o"></i> <a href="topic/test-18/index.html#post-4379" title="Reply To: Private: test">1 week, 2 days ago</a>							</div>
															
																		
																		<div class="line-three">
															
																			
																			<div class="bbp-forum-content">Questions regarding account or website privacy settings should be addressed on this forum. Let us know if you need help.</div>
															
																			
																		</div>
																	</div>
															
																</div>
															</div><!-- #bbp-forum-829 -->
															
																
																	
															<div id="bbp-forum-831" class="loop-item-5 even bbp-forum-status-open bbp-forum-visibility-publish post-831 forum type-forum status-publish has-post-thumbnail hentry forum_tax-security">
																<div>
															
															
																	
																				<div class="circle-live">
																			<div class="blue-circle">
																				<i class="fa fa-file-text-o"></i>
																			</div>
																		</div>
																			
																	<div class="description">
																		<div class="line-one">
																			
																			<a class="bbp-forum-title" href="forum/security-settings/index.html">Security Settings</a>
															
																						</div>
															
																		
																		<div class="line-two">
															
																			<i class="fa fa-bullhorn"></i> 15
																			<i class="fa fa-users"></i>19
																							<i class="fa fa-clock-o"></i> <a href="topic/patrick-es-feo/index.html" title="Patrick es FEO">2 days, 23 hours ago</a>							</div>
															
																		
																		<div class="line-three">
															
																			
																			<div class="bbp-forum-content">Looking for help making sure that your website is as secure as possible? Skim through our forums for the best security tips</div>
															
																			
																		</div>
																	</div>
															
																</div>
															</div><!-- #bbp-forum-831 -->
															
																
															</div><!-- /.forum-post -->
															
															
															
																
																
															</div>
															
																								
																																																	</div>    
                    	                	                    <!-- Sidebar -->
	                    <div class="col-md-3">
	                        <div class="sidebar">
									@if (Auth::guest())
									<button href="#" style="-webkit-appearance: none;
									-moz-appearance: none;
									appearance: none;
									display: inline-block;
									width: auto;
									height: 40px;
									margin-bottom: 20px;
									background: #00a4ef;
									color: #fff;
									text-transform: uppercase;
									border: none;
									padding: 0 2em;
									border-radius: 20px;
									-webkit-box-shadow: none;
									-moz-box-shadow: none;
									box-shadow: none;
									-webkit-transition: all .2s ease-out;
									-moz-transition: all .2s ease-out;
									-o-transition: all .2s ease-out;
									-ms-transition: all .2s ease-out;
									transition: all .2s ease-out;" class="btn btn-default btn-submit submit_ticket_changetext tooltip1" data-toggle="modal" data-target=".bs-example-modal-md">
											Connectez vous                      </button>
											
								@else
									
								<div class="widget-container bbp_widget_login"><div class="title"><p>Connecté</p></div>
								<div class="short-line">
									<img src="./Copyright &amp; Legal - The Next Generation Complete Support System._files/login-short-line.png" class="img-responsive" alt="">
								</div>
				<div class="bbp-logged-in">
				<a href="{/{route('profile', auth()->user()->id)}}" class="submit user-submit"><img alt="" src="{{asset('images/'.auth()->user()->id)}}"  class="avatar avatar-40 photo" height="40" width="40"></a>
					<h4><a href="{/{route('profile', auth()->user()->id)}}" rel="nofollow">{{auth()->user()->name}}</a></h4>
	
					
					<a class="dropdown-item" href="{{ route('logout') }}"
					onclick="event.preventDefault();
								  document.getElementById('logout-form').submit();">
					 <i class="md md-settings-power"></i> Déconnexion
				 </a>
				
				
				   

				 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					 @csrf
				 </form>		</div>
	
			</div>
								@endif
         		<div class="widget-container widget_recent_entries">		<div class="title"><p>Recent Posts</p></div>
							<div class="short-line">
								<img src="./Copyright &amp; Legal - The Next Generation Complete Support System._files/login-short-line.png" class="img-responsive" alt="">
							</div>		<ul>
											<li>
					<a href="https://bigbangthemes.net/TicketLab_WP/knowledgebase-options/">What options come with your knowledge base</a>
									</li>
											<li>
					<a href="https://bigbangthemes.net/TicketLab_WP/manage-your-forums-in-three-simple-ways/">Manage your forums in these three simple ways</a>
									</li>
											<li>
					<a href="https://bigbangthemes.net/TicketLab_WP/how-we-used-bbpress-to-develop-our-ticketing-system/">How we used BBpress to develop our ticketing system</a>
									</li>
											<li>
					<a href="https://bigbangthemes.net/TicketLab_WP/best-use-of-visual-composer-shortcodes/">How to best use the Visual Composer shortcodes</a>
									</li>
											<li>
					<a href="https://bigbangthemes.net/TicketLab_WP/5-best-ways-to-use-video-knowledgebases/">5 best ways to use  video knowledgebases</a>
									</li>
					</ul>
		</div><div class="widget-container widget-submit-topic"><div class="title"><p>Get Support</p></div>
							<div class="short-line">
								<img src="./Copyright &amp; Legal - The Next Generation Complete Support System._files/login-short-line.png" class="img-responsive" alt="">
							</div>				<a href="https://bigbangthemes.net/TicketLab_WP/forums/forum/copyright-legal/#bbt_topic_popup">
					<button type="submit" class="btn btn-default btn-submit">
						Submit Support Ticket					</button>
				</a>

				<div id="bbt_topic_popup" class="overlay">
					<div class="bbt_popup">
						<a class="close" href="https://bigbangthemes.net/TicketLab_WP/forums/forum/copyright-legal/#"><img src="./Copyright &amp; Legal - The Next Generation Complete Support System._files/close.png" alt=""></a>

						<!--boards and lists goes here-->
						<div class="popup_content">
							                                



	<div id="new-topic-0" class="bbp-topic-form">
		<h4 class="popup-title" style="background-image: url(http://themes.scsnoopyindustri.netdna-cdn.com/TicketLab_WP/wp-content/themes/ticketlab/images/temp/popup-bg.jpg);">
			Create New Topic in “Copyright &amp; Legal”		</h4>

		<form id="new-post" name="new-post" method="post" action="https://bigbangthemes.net/TicketLab_WP/forums/forum/copyright-legal/" enctype="multipart/form-data" encoding="multipart/form-data">

			
				
				
				
				
				<div>

					

					
					<p>
						<label for="bbp_topic_title">Topic Title (Maximum Length: 80):</label><br>
						<input type="text" id="bbp_topic_title" value="" tabindex="107" size="40" name="bbp_topic_title" maxlength="80">
					</p>

					
					
					<div class="bbp-the-content-wrapper"><div id="wp-bbp_topic_content-wrap" class="wp-core-ui wp-editor-wrap html-active"><div id="wp-bbp_topic_content-editor-container" class="wp-editor-container"><div id="qt_bbp_topic_content_toolbar" class="quicktags-toolbar"></div><textarea class="bbp-the-content wp-editor-area" rows="12" tabindex="108" cols="40" name="bbp_topic_content" id="bbp_topic_content"></textarea></div>
</div>

</div>
					
					
                    
					
						<p>
							<label for="bbp_topic_tags">Topic Tags:</label><br>
							<input type="text" value="" tabindex="109" size="40" name="bbp_topic_tags" id="bbp_topic_tags">
						</p>

					
                    
					
					
					
                        
                        <p>
                            <input name="bbt_bbp_topic_private" id="bbp_topic_private" type="checkbox" value="bbp_subscribe" tabindex="110">
                            <label class="small" for="bbp_topic_private">Make this topic private?</label>
                        </p>

                        
                        
						<p>
							<input name="bbp_topic_subscription" id="bbp_topic_subscription" type="checkbox" value="bbp_subscribe" tabindex="111">

							
								<label class="small" for="bbp_topic_subscription">Notify me of follow-up replies via email</label>

													</p>

						
					
					
					<div class="bbp-template-notice">
    <p>Maximum file size allowed is 512 KB.</p>
</div>
<p class="bbp-attachments-form">
    <label for="bbp_topic_tags">
        Attachments:
    </label><br>
    <input type="file" size="40" name="d4p_attachment[]"><br>
    <a class="d4p-attachment-addfile" href="https://bigbangthemes.net/TicketLab_WP/forums/forum/copyright-legal/#">Add another file</a>
</p>
					<div class="bbp-submit-wrapper">

						
						<button type="submit" tabindex="112" id="bbp_topic_submit" name="bbp_topic_submit" class="button submit">Submit</button>

						
					</div>

					
				</div>

				
			<input type="hidden" name="bbp_forum_id" id="bbp_forum_id" value="821">

		
		<input type="hidden" name="action" id="bbp_post_action" value="bbp-new-topic">

		
		<input type="hidden" id="_wpnonce" name="_wpnonce" value="ab8b5aa19d"><input type="hidden" name="_wp_http_referer" value="/TicketLab_WP/forums/forum/copyright-legal/">
			                        <input type="hidden" name="_bbp_redirect_link" value="">
		</form>
	</div>


                            						</div>
					</div>
				</div>
				</div><div class="widget-container widget-most-liked"><div class="title"><p>Knowledge Base</p></div>
							<div class="short-line">
								<img src="./Copyright &amp; Legal - The Next Generation Complete Support System._files/login-short-line.png" class="img-responsive" alt="">
							</div>
		<div class="description">
			<div class="posts">
										<div class="post">
							<div class="line-one">
								<i class="fa fa-file-text-o"></i> <a href="https://bigbangthemes.net/TicketLab_WP/knowledgebase/api-key-missing-wrong-parameter/">Api Key missing - wrong parameter</a>
							</div>
							<div class="line-two">
								<i class="fa fa-thumbs-o-up"></i> 0							</div>
						</div>
											<div class="post">
							<div class="line-one">
								<i class="fa fa-file-text-o"></i> <a href="https://bigbangthemes.net/TicketLab_WP/knowledgebase/upgrade-subscription-plan/">Upgrade subscription plan?</a>
							</div>
							<div class="line-two">
								<i class="fa fa-thumbs-o-up"></i> 0							</div>
						</div>
											<div class="post">
							<div class="line-one">
								<i class="fa fa-file-text-o"></i> <a href="https://bigbangthemes.net/TicketLab_WP/knowledgebase/integer-vitae-libero-ac-risus-egestas-placerat-2/">Security questions</a>
							</div>
							<div class="line-two">
								<i class="fa fa-thumbs-o-up"></i> 0							</div>
						</div>
											<div class="post">
							<div class="line-one">
								<i class="fa fa-file-text-o"></i> <a href="https://bigbangthemes.net/TicketLab_WP/knowledgebase/how-to-edit-the-parameters/">How to edit the parameters</a>
							</div>
							<div class="line-two">
								<i class="fa fa-thumbs-o-up"></i> 0							</div>
						</div>
											<div class="post">
							<div class="line-one">
								<i class="fa fa-file-text-o"></i> <a href="https://bigbangthemes.net/TicketLab_WP/knowledgebase/transfer-ownership/">Transfer ownership</a>
							</div>
							<div class="line-two">
								<i class="fa fa-thumbs-o-up"></i> 0							</div>
						</div>
								</div>
		</div>

		</div>    </div>	                    </div>
	                            	            </div>
                    </div>
    </div>
    <!-- End Blog Section -->
</section>
@endsection