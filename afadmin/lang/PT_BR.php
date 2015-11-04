<?php
    /*
     CouchCMS
     Copyright(c) 2009 - 2010 kksidd@gmail.com
     
     THIS IS COPYRIGHTED SOFTWARE
     PLEASE READ THE LICENSE AGREEMENT
	 
	 Tradução para Portugues - Brasileiro por Paulo Freitas (www.paulofreitas.net)
	 
    */
	
	if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly
	
	///////////EDIT BELOW THIS////////////////////////////////////////
	
	// Admin Panel
	// Header
	$t['greeting'] = 'Olá';
	$t['view_site'] = 'Visualizar site';
	$t['logout'] = 'Logout';
	$t['javascript_msg'] = 'Javascript está desabilitado ou não é suportado pelo seu browser.<br>
							Por favor, atualize seu browser ou <a title="Habilite o JavaScript" href="http://www.google.com/support/bin/answer.py?answer=23852"><b>habilite o Javascript</b></a> para usar o painel de Admin.';
    $t['add_new'] = 'Adicionar';   
	$t['add_new_page'] = 'Adicionar nova página';	
	$t['add_new_user'] = 'Adicionar novo usuário';
	$t['view'] = 'Visualizar'; 	
	$t['list'] = 'Lista'; 
	$t['edit'] = 'Editar'; 
	$t['delete'] = 'Deletar';
	$t['delete_selected'] = 'Deletar selecionados';
	$t['advanced_settings'] = 'Configurações Avançadas';
	
	// Sidebar
	$t['comment'] = 'Comentários';
	$t['comments'] = 'Comentários';
	$t['manage_comments'] = 'Gerenciar Comentários';
	$t['users'] = 'Usuários';
	$t['manage_users'] = 'Gerenciar Usuários';
	
	// List Pages
	$t['view_all_folders'] = 'Ver todas as pastas';
	$t['filter'] = 'Filtrar';
	$t['showing'] = 'Exibindo';
	$t['title'] = 'Título';
	$t['folder'] = 'Pasta';
	$t['date'] = 'Data';
	$t['actions'] = 'Ações';
	$t['no_pages_found'] = 'Nenhuma página encontrada';
	$t['published'] = 'Publicado';
	$t['unpublished'] = 'Não publicado';
	$t['confirm_delete_page'] = 'Você tem certeza de que quer deletar esta página'; //No question mark please.
	$t['confirm_delete_selected_pages'] = 'Você tem certeza de que quer deletar as páginas selecionadas?';
	$t['remove_template'] = 'Remover Template';
	$t['template_missing'] = 'Template não encontrado';
	$t['prev'] = 'Anterior'; // Pagination Button
	$t['next'] = 'Próximo'; // Pagination Button

	// Pages
	$t['welcome'] = 'Bem vindo';
	$t['no_regions_defined'] = 'Nenhuma região editável foi definida';
	$t['no_templates_defined'] = 'Nenhum template está sendo gerenciado pelo CMS';
	$t['access_level'] = 'Nível de acesso';
	$t['superadmin'] = 'Super Admin';
	$t['admin'] = 'Administrador';
	$t['authenticated_user_special'] = 'Usuário autenticado (Especial)';
	$t['authenitcated_user'] = 'Usuário autenticado';
	$t['unauthenticated_user'] = 'Todas as pessoas';
	$t['allow_comments'] = 'Habilitar comentários de usuários';
	$t['status'] = 'Status';
	$t['name'] = 'Nome';
	$t['title_desc'] = 'deixe este campo vazio para usar um nome gerado automaticamente pelo sistema a partir do título';
	$t['required'] = 'obrigatório'; // Required field
	$t['required_msg'] = 'Campo obrigatório não pode ser deixado em branco';
	$t['browse_server'] = 'Localizar'; 
	$t['view_image'] = 'Visualizar imagem';
	$t['thumb_created_auto'] = 'Será criado automaticamente'; 
	$t['recreate'] = 'Recriar'; 
	$t['thumb_recreated'] = 'Miniatura criada'; 
	$t['crop_from'] = 'cortando de'; 
	$t['top_left'] = 'Topo Esquerdo';
	$t['top_center'] = 'Topo Centro';
	$t['top_right'] = 'Topo Direito';
	$t['middle_left'] = 'Meio Esquerda';
	$t['middle'] = 'Meio';
	$t['middle_right'] = 'Meio Direita';
	$t['bottom_left'] = 'Inferior Esquerda';
	$t['bottom_center'] = 'Inferior Centro';
	$t['bottom_right'] = 'Inferior Direita';
	$t['view_thumbnail'] = 'Ver Miniatura';
	$t['field_not_found'] = 'Campo não encontrado!'; 
	$t['delete_permanently'] = 'Deletar permanentemente?'; 
	$t['view_code'] = 'Ver código'; 
	$t['confirm_delete_field'] = 'Você tem certeza de que quer deletar permanentemente este campo?';
	$t['save'] = 'Salvar'; 
	
	// Comments
	$t['all'] = 'Todos'; 
	$t['unapprove'] = 'Rejeitar';
	$t['unapproved'] = 'Rejeitados';
	$t['approve'] = 'Aprovar';
	$t['approved'] = 'Aprovados';
	$t['select-deselect'] = 'Selecionar/Deselecionar Todos';
	$t['confirm_delete_comment'] = 'Você tem certeza de que quer deletar este comentário?';
	$t['confirm_delete_selected_comments'] = 'Você tem certeza de que quer deletar os comentários selecionados?';
	$t['bulk_action'] = 'Ações em massa com os selecionados';
	$t['apply'] = 'Aplicar'; 
	$t['submitted_on'] = 'Submetido em'; 
	$t['email'] = 'E-Mail';
	$t['website'] = 'Website';
	$t['duplicate_content'] = 'Duplicar conteúdo';
	$t['insufficient_interval'] = 'Não houve intervalo suficiente entre os comentários.';
	
	// Users
	$t['user_name_restrictions'] = 'Somente caracteres caixa baixa, numerais, hífen e traço baixo são permitidos';
	$t['display_name'] = 'Mostrar nome';
	$t['role'] = 'Papel';
	$t['no_users_found'] = 'Nenhum usuário encontrado';
	$t['confirm_delete_user'] = 'Você tem certeza de que quer deletar este usuário'; //No question mark please.
	$t['confirm_delete_selected_users'] = 'Você tem certeza de que quer deletar os usuários selecionados?';
	$t['disabled'] = 'Desabilitado';
	$t['new_password'] = 'Nova senha';
	$t['new_password_msg'] = 'Se você quiser alterar a senha, preencha com uma nova. Caso contrário deixe em branco';
	$t['repeat_password'] = 'Repita a senha';
	$t['repeat_password_msg'] = 'Digite sua nova senha novamente.';
	$t['user_name_exists'] = 'Usuário já existente';
	$t['email_exists'] = 'E-Mail já existente';

	// Login
	$t['user_name'] = 'Usuário';
	$t['password'] = 'Senha';
	$t['login'] = 'Login';
	$t['forgot_password'] = 'Esqueceu sua senha?';
	$t['prompt_cookies'] = 'Os cookies precisam estar habilitados para usar este CMS';
	$t['prompt_username'] = 'Por favor preencha com seu usuário';
	$t['prompt_password'] = 'Por favor preencha com sua senha';
	$t['invalid_credentials'] = 'Usuário ou senha inválidos';
	$t['account_disabled'] = 'Conta desabilitada';
	$t['access_denied'] = 'Acesso negado';
	$t['insufficient_privileges'] = 'Você não possui privilégios suficientes para visualizar esta página.
									Para visualizar esta página você precisa estar logado com uma conta com privilégios suficientes.';
	
	// Password recovery
	$t['recovery_prompt'] = 'Por favor entre com seu usuário ou seu e-mail<br />
							Você irá receber sua senha via email.';
	$t['name_or_email'] = 'Seu login ou E-mail';
	$t['submit'] = 'Enviar';
	$t['submit_error'] = 'Por favor entre com seu usuário ou e-mail';
	$t['no_such_user'] = 'Este usuário não existe.';
	$t['reset_req_email_subject'] = 'Redefinição de senha solicitada';
	$t['reset_req_email_msg_0'] = 'A solicitação para redefinição de senha foi recebida pelo seguinte site e usuário';
	$t['reset_req_email_msg_1'] = 'Para confirmar que a requisição foi feita por você, por favor visiste o seguinte endereço, caso contrário, somente ignore este email.';
	$t['email_failed'] = 'E-Mail não pôde ser enviado';
	$t['reset_req_email_confirm'] = 'Um e-mail de confirmação foi enviado para você<br />
									Por favor verifique seu e-mail.';
	$t['invalid_key'] = 'Chave inválida';
	$t['reset_email_subject'] = 'Sua nova senha';
	$t['reset_email_msg_0'] = 'Sua senha foi redefinida para o seguinte site e usuário';
	$t['reset_email_msg_1'] = 'Uma vez logado, você poderá alterar sua senha.';
	$t['reset_email_confirm'] = 'Sua senha foi redefinida<br />
								Por favor verifique seu email para uma nova senha.';
	
	// Maintenance Mode
	$t['back_soon'] = '<h2>Em manutenção</h2>
						<p>
							Desculpe pelo incoveniente.<br />
							Nosso site está passando por uma manutenção agendada.<br />
							<b>Por favor tente voltar em alguns minutos.</b>
						</p>';
	// Addendum to Version 1.1 /////////////////////////////////////
	// Admin Panel
	$t['admin_panel'] = 'Painel Administrativo';
	$t['login_title'] = 'CouchCMS';
	
	// Folders
	$t['no_folders'] = 'Nenhuma pasta definida';
	$t['select_folder'] = 'Escolha a pasta';
	$t['folders'] = 'Pastas';
	$t['manage_folders'] = 'Editar pastas';
	$t['add_new_folder'] = 'Adicionar nova pasta';
	$t['parent_folder'] = 'Pasta pai';
	$t['weight'] = 'Peso';
	$t['weight_desc'] = 'Quanto mais alto o valor, mais baixo a pasta aparece na lista. Você pode inserir um valor negativo.';
	$t['desc'] = 'Descrição';
	$t['image'] = 'Imagem';
	$t['cannot_be_own_parent'] = 'Uma pasta não pode ser o próprio pai';
	$t['name_already_exists'] = 'Esse nome já existe';
	$t['pages'] = 'Páginas';
	$t['none'] = 'Nenhuma';
	$t['confirm_delete_folder'] = 'Tem certeza de que quer apagar esta pasta'; //No question mark please.
	$t['confirm_delete_selected_folders'] = 'Deseja apagar todas as pastas selecionadas?';
	
	// Drafts
	$t['draft_caps'] = 'RASCUNHO'; //in Caps
	$t['draft'] = 'Rascunho';
	$t['drafts'] = 'Rascunhos';
	$t['create_draft'] = 'Criar rascunho';
	$t['create_draft_msg'] = 'Criar uma cópia desta página (e salvar alterações nela)';
	$t['manage_drafts'] = 'Administrar rascunhos'; //plural
	$t['update_original'] = 'Atualizar versão original';
	$t['update_original_msg'] = 'Copiar os conteúdos desse rascunho para a página original (e apagar esse rascunho)';
	$t['recreate_original'] = 'Recriar original';
	$t['no_drafts_found'] = 'Nenhum rascunho encontrado';
	$t['original_page'] = 'Página original';
	$t['template'] = 'Template';
	$t['modified'] = 'Modificado'; //date of last modification
	$t['preview'] = 'Pré-visualizar'; 
	$t['confirm_delete_draft'] = 'Deseja apagar este rascunho?';
	$t['confirm_delete_selected_drafts'] = 'Deseja apagar todos os rascunhos selecionados?';
	$t['confirm_apply_selected_drafts'] = 'Deseja alterar todos os rascunhos selecionados?';
	$t['view_all_drafts'] = 'Ver todos os rascunhos';
	$t['original_deleted'] = 'ORIGINAL APAGADO'; //in Caps
   
   // Addendum to Version 1.2 /////////////////////////////////////
   // Nested pages
   $t['parent_page'] = 'Página pai';
   $t['page_weight_desc'] = 'Quanto maior o valor, mais baixo a pagina vai aparecer na lista. Pode ser um número negativo.';
   $t['active'] = 'Ativo';
   $t['inactive'] = 'Inativo';
   $t['menu'] = 'Menu';
   $t['menu_text'] = 'Texto do menu';
   $t['show_in_menu'] = 'Mostrar no menu';
   $t['not_shown_in_menu'] = 'Não mostrado no menu';
   $t['leave_empty'] = 'Deixe vazio para usar o título da página';
   $t['menu_link'] = 'Link do menu';
   $t['link_url'] = 'Essa página aponta para o seguinte local';
   $t['link_url_desc'] = 'Pode ficar vazio';
   $t['separate_window'] = 'Abrir em uma janela separada';
   $t['pointer_page'] = 'Página de apontamento';   
   $t['points_to_another_page'] = 'Aponta para outra página';
   $t['points_to'] = 'Aponta para';   
   $t['redirects'] = 'Redireciona';
   $t['masquerades'] = 'Mascaradas (Masquerades)';
   $t['strict_matching'] = 'Marcar no menu para todas as páginas abaixo deste link';
   $t['up'] = 'Mover acima';
   $t['down'] = 'Mover abaixo';
   $t['remove_template_completely'] = 'Apague todas as páginas e rascunhos desse template para removê-lo completamente';
   $t['remove_uncloned_template_completely'] = 'Apague todos os rascunhos desse template para removê-lo completamente';

   // Addendum to Version 1.2.5 /////////////////////////////////////
   // Gallery
   $t['bulk_upload'] = 'Enviar';
   $t['folder_empty'] = 'Pasta vazia. Use o botão de envio para incluir imagens.';
   $t['root'] = 'Raíz';
   $t['item'] = 'imagem'; //single
   $t['items'] = 'imagens'; //multiple 
   $t['container'] = 'pasta'; //single 
   $t['containers'] = 'pastas'; //multiple 

   //
   $t['columns_missing'] = 'Algumas colunas estão faltando!'; 
   $t['confirm_delete_columns'] = 'Deseja apagar as colunas faltando permanentemente?';
   $t['add_row'] = '+ Linha';