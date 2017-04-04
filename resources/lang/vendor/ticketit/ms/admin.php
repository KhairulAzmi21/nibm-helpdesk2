<?php

return [

	/*
		  *  Constants
	*/
	'nav-settings' => 'Tetapan',
	'nav-agents' => 'Ejen',
	'nav-dashboard' => 'Papan Pemuka',
	'nav-categories' => 'Kategori',
	'nav-priorities' => 'Keutamaan',
	'nav-statuses' => 'Status',
	'nav-configuration' => 'Konfigurasi',
	'nav-administrator' => 'Administrator', //new

	'table-hash' => '#',
	'table-id' => 'ID',
	'table-name' => 'Nama',
	'table-action' => 'Tindakan',
	'table-categories' => 'Kategori',
	'table-join-category' => 'Kategori Bersama',
	'table-remove-agent' => 'Buang Dari Ejen',
	'table-remove-administrator' => 'Buang Dari Administrator', // New

	'table-slug' => 'Slug',
	'table-default' => 'Nilai Tetap',
	'table-value' => 'Nilai',
	'table-lang' => 'Bahasa',
	'table-edit' => 'Sunting',

	'btn-back' => 'Sebelum',
	'btn-delete' => 'Padam',
	'btn-edit' => 'Sunting',
	'btn-join' => 'Menyertai',
	'btn-remove' => 'Buang',
	'btn-submit' => 'Hantar',
	'btn-save' => 'Simpan',
	'btn-update' => 'Kemas kini',

	'colon' => ': ',

	/*
		  *  Page specific
	*/

// tickets-admin/____
	'index-title' => 'Sistem Papan Pemuka Tiket',
	'index-empty-records' => 'Tiket Belum Dicipta',
	'index-total-tickets' => 'Jumlah Tiket',
	'index-open-tickets' => 'Tiket yang Dibuka',
	'index-closed-tickets' => 'Tiket yang Ditutup',
	'index-performance-indicator' => 'Penunjuk Prestasi',
	'index-periods' => 'Tempoh',
	'index-3-months' => '3 Bulan',
	'index-6-months' => '6 Bulan',
	'index-12-months' => '12 Bulan',
	'index-tickets-share-per-category' => 'Bahagian Tiket Per Kategori',
	'index-tickets-share-per-agent' => 'Bahagian Tiket Per Ejen',
	'index-categories' => 'Kategori-kategori',
	'index-category' => 'Kategori',
	'index-agents' => 'Ejen-ejen',
	'index-agent' => 'Ejen',
	'index-administrators' => 'Pentadbir-pentadbir', //new
	'index-administrator' => 'Pentadbir', //new
	'index-users' => 'Pengguna-pengguna',
	'index-user' => 'Penguna',
	'index-tickets' => 'Tiket',
	'index-open' => 'Buka',
	'index-closed' => 'Tutup',
	'index-total' => 'Jumlah',
	'index-month' => 'Bulan',
	'index-performance-chart' => 'Berapa hari dalam purata untuk menyelesaikan tiket?',
	'index-categories-chart' => 'Pengedaran Tiket Bagi Setiap Kategori',
	'index-agents-chart' => 'Pengedaran Tiket Bagi Setiap Ejen',

// tickets-admin/agent/____
	'agent-index-title' => 'Pengurusan Ejen',
	'btn-create-new-agent' => 'Cipta Ejen Baru',
	'agent-index-no-agents' => 'Tiada Ejen, ',
	'agent-index-create-new' => 'Tambah Ejen-ejen',
	'agent-create-title' => 'Tambah Ejen',
	'agent-create-add-agents' => 'Tambah Ejen-ejen',
	'agent-create-no-users' => 'Tiada Akaun Penguna, Cipta Akaun Pengguna.',
	'agent-create-select-user' => 'Pilih akaun pengguna untuk ditambah sebagai ejen',

// tickets-admin/administrators/____
	'administrator-index-title' => 'Pengurusan Pentadbir', //new
	'btn-create-new-administrator' => 'Cipta Pentadbir Baru', //new
	'administrator-index-no-administrators' => 'Tiada Pentadbir, ', //new
	'administrator-index-create-new' => 'Tambah pentadbir-pentadbir', //new
	'administrator-create-title' => 'Tambah Pentadbir', //new
	'administrator-create-add-administrators' => 'Tambah pentadbir-pentadbir', //new
	'administrator-create-no-users' => 'Tiada Akaun Penguna, Cipta Akaun Pengguna.', //new
	'administrator-create-select-user' => 'Pilih akaun pengguna untuk ditambah sebagai pentadbir', //new

// tickets-admin/category/____
	'category-index-title' => 'Pengurusan Kategori',
	'btn-create-new-category' => 'Cipta Kategori Baru',
	'category-index-no-categories' => 'Tiada Kategori, ',
	'category-index-create-new' => 'Cipta Kategori Baru',
	'category-index-js-delete' => 'Adakah anda pasti untuk memadam kategori: ',
	'category-create-title' => 'Cipta Kategori Baru',
	'category-create-name' => 'Nama',
	'category-create-color' => 'Warna',
	'category-edit-title' => 'Ubah Kategori: :nama',

// tickets-admin/priority/____
	'priority-index-title' => 'Pengurusan Keutamaan',
	'btn-create-new-priority' => 'Cipta Keutamaan Baru',
	'priority-index-no-priorities' => 'Tiada Keutamaan, ',
	'priority-index-create-new' => 'Cipta Keutamaan Baru',
	'priority-index-js-delete' => 'Adakah anda pasti untuk memadam keutamaan: ',
	'priority-create-title' => 'Cipta Keutamaan Baru',
	'priority-create-name' => 'Nama',
	'priority-create-color' => 'Warna',
	'priority-edit-title' => 'Ubah Keutamaan: :nama',

// tickets-admin/status/____
	'status-index-title' => 'Pengurusan Status',
	'btn-create-new-status' => 'Cipta Status Baru',
	'status-index-no-statuses' => 'Tiada Status,',
	'status-index-create-new' => 'Cipta Status Baru',
	'status-index-js-delete' => 'Adakah anda pasti untuk memadam status: ',
	'status-create-title' => 'Cipta Status Baru',
	'status-create-name' => 'Nama',
	'status-create-color' => 'Warna',
	'status-edit-title' => 'Ubah Status: :nama',

// tickets-admin/configuration/____
	'config-index-title' => 'Tetapan Konfigurasi',
	'config-index-subtitle' => 'Tetapan',
	'btn-create-new-config' => 'Tambah Tetapan Baru',
	'config-index-no-settings' => 'Tiada Tetapan,',
	'config-index-initial' => 'Permulaan',
	'config-index-tickets' => 'Tiket',
	'config-index-notifications' => 'Notifikasi',
	'config-index-permissions' => 'Kebenaran',
	'config-index-editor' => 'Penyunting', //Added: 2016.01.14
	'config-index-other' => 'Lain-lain',
	'config-create-title' => 'Cipta: Tetapan Global Baru',
	'config-create-subtitle' => 'Cipta Tetapan',
	'config-edit-title' => 'Ubah: Konfigurasi Global',
	'config-edit-subtitle' => 'Ubah Tetapan',
	'config-edit-id' => 'ID',
	'config-edit-slug' => 'Slug',
	'config-edit-default' => 'Nilai Asal',
	'config-edit-value' => 'Nilai Saya',
	'config-edit-language' => 'Bahasa',
	'config-edit-unserialize' => 'Dapatkan nilai array, dan ubah nilai',
	'config-edit-serialize' => 'Get the serialized string of the changed values (to be entered in the field)',
	'config-edit-should-serialize' => 'Serialize', //Added: 2016-01-16
	'config-edit-eval-warning' => 'When checked, the server will run eval()!
  									  Don\'t use this if eval() is disabled on your server or if you don\'t exactly know what you are doing!
  									  Exact code executed:', //Added: 2016-01-16
	'config-edit-reenter-password' => 'Re-enter your password', //Added: 2016-01-16
	'config-edit-auth-failed' => 'Password mismatch', //Added: 2016-01-16
	'config-edit-eval-error' => 'Invalid value', //Added: 2016-01-16
	'config-edit-tools' => 'Tools:',

];
