<?php

return [

	/*
		  *  Constants
	*/

	'nav-active-tickets' => 'Tiket Aktif',
	'nav-completed-tickets' => 'Tiket Selesai',

	// Tables
	'table-id' => '#',
	'table-subject' => 'Subjek',
	'table-owner' => 'Pemilik',
	'table-status' => 'Status',
	'table-last-updated' => 'Kali terakhir kemas kini',
	'table-priority' => 'Keutamaan',
	'table-agent' => 'Ejen',
	'table-category' => 'Kategori',

	// Datatables
	'table-decimal' => '',
	'table-empty' => 'Tiada data dalam jadual',
	'table-info' => 'Papar _START_ ke _END_ daripada _TOTAL_ entri',
	'table-info-empty' => 'Papar 0 ke 0 daripada 0 entri',
	'table-info-filtered' => '(tapis dari _MAX_ jumlah entri)',
	'table-info-postfix' => '',
	'table-thousands' => ',',
	'table-length-menu' => 'Papar _MENU_ entri',
	'table-loading-results' => 'Loading...',
	'table-processing' => 'Proses...',
	'table-search' => 'Cari:',
	'table-zero-records' => 'Tiada rekod yang sepadan ditemui',
	'table-paginate-first' => 'Pertama',
	'table-paginate-last' => 'Terakhir',
	'table-paginate-next' => 'Seterusnya',
	'table-paginate-prev' => 'Sebelum',
	'table-aria-sort-asc' => ': Aktifkan untuk menyusun kolum menaik',
	'table-aria-sort-desc' => ': Aktifkan untuk menyusun kolum menurun',

	'btn-back' => 'Kembali',
	'btn-cancel' => 'Batal', // NEW
	'btn-close' => 'Tutup',
	'btn-delete' => 'Padam',
	'btn-edit' => 'Ubah',
	'btn-mark-complete' => 'Tanda Selesai',
	'btn-submit' => 'Hantar',

	'agent' => 'Ejen',
	'category' => 'Kategori',
	'colon' => ': ',
	'comments' => 'Komen',
	'created' => 'Telah dicipta',
	'description' => 'Huraian',
	'flash-x' => '×', // &times;
	'last-update' => 'Kali terakhir kemas kini',
	'no-replies' => 'Tiada maklum balas.',
	'owner' => 'Pemilik',
	'priority' => 'Keutamaan',
	'reopen-ticket' => 'Buka semula Tiket',
	'reply' => 'Jawab',
	'responsible' => 'Tanggungjawab',
	'status' => 'Status',
	'subject' => 'Subjek',

	/*
		  *  Page specific
	*/

// ____
	'index-title' => 'Laman utama meja bantuan',

// tickets/____
	'index-my-tickets' => 'Tiket Saya',
	'btn-create-new-ticket' => 'Tambah Tiket Baru',
	'index-complete-none' => 'Tiada Tiket yang Cukup',
	'index-active-check' => 'Pastikan anda semak aktif tiket jika anda tidak dapat mencari tiket.',
	'index-active-none' => 'Tiada Tiket Aktif,',
	'index-create-new-ticket' => 'Tambah Tiket Baru',
	'index-complete-check' => 'Pastikan anda semak tiket yang cukup jika anda tidak dapat mencari tiket.',

	'create-ticket-title' => 'Borang Tiket Baru',
	'create-new-ticket' => 'Tambah Tiket Baru',
	'create-ticket-brief-issue' => 'Ringkasan isu tiket',
	'create-ticket-describe-issue' => 'Huraikan isu anda disini secara terperinci',

	'show-ticket-title' => 'Tiket',
	'show-ticket-js-delete' => 'Adakah anda pasti untuk memadam: ',
	'show-ticket-modal-delete-title' => 'Padam Tiket',
	'show-ticket-modal-delete-message' => 'Adakah anda pasti untuk memadam tiket: :subject?',

	/*
		  *  Controllers
	*/

// AgentsController
	'agents-are-added-to-agents' => 'Ejen :names are added to agents',
	'administrators-are-added-to-administrators' => 'Pentadbir :names are added to administrators', //New
	'agents-joined-categories-ok' => 'Peneyertaan kategori telah berjaya',
	'agents-is-removed-from-team' => 'Buang Ejen :name from the agent team',
	'administrators-is-removed-from-team' => 'Buang Pentadbir :name from the administrators team', // New

// CategoriesController
	'category-name-has-been-created' => 'Kategori :name berjaya ditambah!',
	'category-name-has-been-modified' => 'Kategori :name berjaya dikemaskini!',
	'category-name-has-been-deleted' => 'Kategori :name berjaya dibuang!',

// PrioritiesController
	'priority-name-has-been-created' => 'Keutamaan :name berjaya ditambah!',
	'priority-name-has-been-modified' => 'Keutamaan :name berjaya dikemaskini!',
	'priority-name-has-been-deleted' => 'Keutamaan :name berjaya dibuang!',
	'priority-all-tickets-here' => 'Semua keutamaan berkaitan tiket disini',

// StatusesController
	'status-name-has-been-created' => 'Status :name berjaya ditambah!',
	'status-name-has-been-modified' => 'Status :name berjaya dikemaskini!',
	'status-name-has-been-deleted' => 'Status :name berjaya dibuang!',
	'status-all-tickets-here' => 'Semua status berkaitan tiket disini',

// CommentsController
	'comment-has-been-added-ok' => 'Komen telah berjaya ditambah',

// NotificationsController
	'notify-new-comment-from' => 'Komen baru dari ',
	'notify-on' => ' buka ',
	'notify-status-to-complete' => ' Status untuk melengkapkan',
	'notify-status-to' => ' Status untuk ',
	'notify-transferred' => ' Dipindahkan ',
	'notify-to-you' => ' kepada anda',
	'notify-created-ticket' => ' tiket yang telah ditambah ',
	'notify-updated' => ' kemas kini ',

	// TicketsController
	'the-ticket-has-been-created' => 'Tiket telah ditambah!',
	'the-ticket-has-been-modified' => 'Tiket telah diubahsuai!',
	'the-ticket-has-been-deleted' => 'Tiket :name has been deleted!',
	'the-ticket-has-been-completed' => 'Tiket :name has been completed!',
	'the-ticket-has-been-reopened' => 'Tiket :name has been reopened!',
	'you-are-not-permitted-to-do-this' => 'Anda tidak dibenarkan untuk melakukan tindakan ini!',

	/*
		 *  Middlewares
	*/

	//  IsAdminMiddleware IsAgentMiddleware ResAccessMiddleware
	'you-are-not-permitted-to-access' => 'Anda tidak dibenarkan untuk mengakses halaman ini!',

];
