<?php

//--------------------------------
// memeboard configuration file
// by sakots
//--------------------------------

// 掲示板の名前
const BOARD_NAME = 'けいじばん';

// 管理者パスワード（変更しないと動かなくしてあります）
const ADMIN_PASSWORD = 'change_me';

// 掲示板のディレクトリ名（最後に/をつけない）
const BOARD_DIR = 'board';

/* ------------- トラブルシューティング ------------- */

//問題なく動作している時は変更しない。

//画像やHTMLファイルのパーミッション(初期値 0606)
const PERMISSION_FOR_DEST = 0606;
//ブラウザから直接呼び出さないログファイルのパーミッション(初期値 0600)
const PERMISSION_FOR_LOG = 0600;
//画像や動画ファイルを保存するディレクトリのパーミッション(初期値 0707)
const PERMISSION_FOR_DIR = 0707;

//--------------------------------

// configのバージョン
const CONFIG_VERSION = 20251216;