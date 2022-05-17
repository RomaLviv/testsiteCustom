/**
 * File customize-controls.js.
 *
 *
 * Робимо динамішні зміни в панелі кастомайзера.
 */

 (function() {

    // wp.customize.bind( 'ready', function() {
	// 	wp.customize( 'button_show', function( setting ) {
	// 		wp.customize.control( 'button_text_color', function( control ) {
	// 			var visibility = function() {
	// 				if ( 'show' === setting.get() ) {
	// 					control.container.slideDown( 180 );
	// 				} else {
	// 					control.container.slideUp( 180 );
	// 				}
	// 			};
	// 			visibility();
	// 			setting.bind( visibility );
	// 		});
	// 	});
	// });

// Секція про нас

    wp.customize.bind( 'ready', function() {
		wp.customize( 'about_section_show', function( setting ) {
			wp.customize.control( 'bg_image_white', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});
			wp.customize.control( 'bg_image_black', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});
			wp.customize.control( 'how_many_about_us_items', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
						
					} else {
						control.container.slideUp( 180 );
						
					}
				};
				visibility();
				setting.bind( visibility );
			});

			
			
			


			wp.customize.bind( 'ready', function() {
				wp.customize( 'how_many_about_us_items', function( setting ) {
					wp.customize.control( 'about_title_text1', function( control ) {
						var visibility = function() {
							if ( 'one' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'two' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'three' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'four' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else {
								control.container.slideUp( 180 );
							}
						};
						visibility();
						setting.bind( visibility );
					});
					wp.customize.control( 'about_subtitle_text1', function( control ) {
						var visibility = function() {
							if ( 'one' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'two' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'three' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'four' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else {
								control.container.slideUp( 180 );
							}
						};
						visibility();
						setting.bind( visibility );
					});
					wp.customize.control( 'about_title_text2', function( control ) {
						var visibility = function() {
							if ( 'one' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'two' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'three' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'four' === setting.get() ) {
								control.container.slideDown( 180 );
							}
						};
						visibility();
						setting.bind( visibility );
					});
					wp.customize.control( 'about_subtitle_text2', function( control ) {
						var visibility = function() {
							if ( 'one' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'two' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'three' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'four' === setting.get() ) {
								control.container.slideDown( 180 );
							}
						};
						visibility();
						setting.bind( visibility );
					});
					wp.customize.control( 'about_title_text3', function( control ) {
						var visibility = function() {
							if ( 'one' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'two' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'three' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'four' === setting.get() ) {
								control.container.slideDown( 180 );
							}
						};
						visibility();
						setting.bind( visibility );
					});
					wp.customize.control( 'about_subtitle_text3', function( control ) {
						var visibility = function() {
							if ( 'one' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'two' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'three' === setting.get() ) {
								control.container.slideDown( 180 );
							  }else if ( 'four' === setting.get() ) {
								control.container.slideDown( 180 );
							}
						};
						visibility();
						setting.bind( visibility );
					});
					wp.customize.control( 'about_title_text4', function( control ) {
						var visibility = function() {
							if ( 'one' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'two' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'three' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'four' === setting.get() ) {
								control.container.slideDown( 180 );
							}
						};
						visibility();
						setting.bind( visibility );
					});
					wp.customize.control( 'about_subtitle_text4', function( control ) {
						var visibility = function() {
							if ( 'one' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'two' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'three' === setting.get() ) {
								control.container.slideUp( 180 );
							  }else if ( 'four' === setting.get() ) {
								control.container.slideDown( 180 );
							}
						};
						visibility();
						setting.bind( visibility );
					});
				});
			});







		});
	});








    

 
    
    
   
   








// Ховаєм Секцію Команда
	wp.customize.bind( 'ready', function() {
		wp.customize( 'team_section_show', function( setting ) {
			wp.customize.control( 'team_title', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});

			wp.customize.control( 'team_subtitle', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});

			wp.customize.control( 'team_meber_image', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});

			wp.customize.control( 'team_member_name', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});

			wp.customize.control( 'team_member_position', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});
			wp.customize.control( 'team_meber_image_2', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});

			wp.customize.control( 'team_member_name_2', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});

			wp.customize.control( 'team_member_position_2', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});

			wp.customize.control( 'team_meber_image_3', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});

			wp.customize.control( 'team_member_name_3', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});

			wp.customize.control( 'team_member_position_3', function( control ) {
				var visibility = function() {
					if ( 'show' === setting.get() ) {
						control.container.slideDown( 180 );
                        // alert("Work!");
					} else {
						control.container.slideUp( 180 );
					}
				};
				visibility();
				setting.bind( visibility );
			});




		});
	});

// Ховаєм Секцію Досягнення
wp.customize.bind( 'ready', function() {
	wp.customize( 'provide_section_show', function( setting ) {
		wp.customize.control( 'provide_title', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});
		wp.customize.control( 'provide_subtitle', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});
		wp.customize.control( 'provide_image_item_1', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});
		wp.customize.control( 'provide_title_item_1', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});
		wp.customize.control( 'provide_subtitle_item_1', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});
		wp.customize.control( 'provide_image_item_2', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});
		wp.customize.control( 'provide_title_item_2', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});
		wp.customize.control( 'provide_subtitle_item_2', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});
		wp.customize.control( 'provide_image_item_3', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});
		wp.customize.control( 'provide_title_item_3', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});
		wp.customize.control( 'provide_subtitle_item_3', function( control ) {
			var visibility = function() {
				if ( 'show' === setting.get() ) {
					control.container.slideDown( 180 );
					// alert("Work!");
				} else {
					control.container.slideUp( 180 );
				}
			};
			visibility();
			setting.bind( visibility );
		});




	});
});






})();
