(function() {
	tinymce.PluginManager.add('ex_first_button', function( editor, url ) { // id кнопки true_mce_button должен быть везде один и тот же
		editor.addButton( 'ex_first_button', { // id кнопки true_mce_button
			image: url + "/social-yt.png",
			type: 'button',
			title: 'Вставить видео на страницу', // всплывающая подсказка при наведении
			onclick: function() {
				editor.windowManager.open( {
					title: 'Задайте параметры',
					body: [
						{
							type: 'textbox', // тип textbox = текстовое поле
							name: 'header', // ID, будет использоваться ниже
							label: 'Заголовок', // лейбл
							value: '' // значение по умолчанию
						},
						{
							type: 'textbox', // тип textbox = текстовое поле
							name: 'link',
							label: 'ссылка',
							value: '',
							multiline: true, // большое текстовое поле - textarea
							minWidth: 300, // минимальная ширина в пикселях
							minHeight: 50 // минимальная высота в пикселях
						}
					],
					onsubmit: function( e ) { // это будет происходить после заполнения полей и нажатии кнопки отправки
						editor.insertContent('<b>' + e.data.header + '</b><div class="video"><iframe src="' + e.data.link + '"  frameborder="0" allowfullscreen="allowfullscreen" data-mce-fragment="1"></iframe></div>');
					}
				});
			}
		});
		editor.addButton( 'ex_second_button', { // id кнопки true_mce_button
			text: 'Кнопка',
			type: 'button',
			title: 'Вставить кнопку', // всплывающая подсказка при наведении
			onclick: function() {
				editor.windowManager.open( {
					title: 'Задайте параметры',
					body: [
						{
							type: 'textbox', // тип textbox = текстовое поле
							name: 'header', // ID, будет использоваться ниже
							label: 'Текст кнопки', // лейбл
							value: 'Кнопка' // значение по умолчанию
						},
						{
							type: 'textbox', // тип textbox = текстовое поле
							name: 'link',
							label: 'ссылка',
							value: '#',
							multiline: true, // большое текстовое поле - textarea
							minWidth: 300, // минимальная ширина в пикселях
							minHeight: 50 // минимальная высота в пикселях
						}
					],
					onsubmit: function( e ) { // это будет происходить после заполнения полей и нажатии кнопки отправки
						editor.insertContent('<a class="bttn" href="' + e.data.link + '">' + e.data.header + '</a>');
					}
				});
			}
		});
		// editor.addButton( 'accord_schortcode_button', { // id кнопки true_mce_button
		// 	image: url + "/accordion.gif",
		// 	type: 'button',
		// 	title: 'Вставить шорткод Аккардеона', // всплывающая подсказка при наведении
		// 	onclick: function() {
		// 		editor.insertContent('[accordion] [/accordion]');
		// 	}
		// });
		// editor.addButton( 'accord_item_schortcode_button', { // id кнопки true_mce_button
		// 	image: url + "/accordion-item.gif",
		// 	type: 'button',
		// 	title: 'Вставить пункт аккордиона', // всплывающая подсказка при наведении
		// 	onclick: function() {
		// 		editor.windowManager.open( {
		// 			title: 'Задайте параметры',
		// 			body: [
		// 				{
		// 					type: 'textbox', // тип textbox = текстовое поле
		// 					name: 'header', // ID, будет использоваться ниже
		// 					label: 'Заголовок пункта', // лейбл
		// 					value: 'Пункт 1' // значение по умолчанию
		// 				},
		// 				{
		// 					type: 'textbox', // тип textbox = текстовое поле
		// 					name: 'item_text',
		// 					label: 'Текст',
		// 					value: '',
		// 					multiline: true, // большое текстовое поле - textarea
		// 					minWidth: 300, // минимальная ширина в пикселях
		// 					minHeight: 50 // минимальная высота в пикселях
		// 				}
		// 			],
		// 			onsubmit: function( e ) { // это будет происходить после заполнения полей и нажатии кнопки отправки
		// 				editor.insertContent('[accordion_item title="' + e.data.header + '"]' + e.data.item_text + ' [/accordion_item]');
		// 			}
		// 		});
		// 	}
		// });

	});
})();