'use strict';

    // コピー対象となるテキスト
    const copy_target = document.querySelector('#target_text');
    // コピーボタン
    const copyBtn = document.querySelector('#clipboard');

    // コピーボタンのクリックイベント
    copyBtn.addEventListener('click', () => {
        copyText(copy_target);
    });

    const copyText = (copy_target) => {
    // テキストの選択
    document.getSelection().selectAllChildren(copy_target);
    // 選択範囲のコピー
    document.execCommand("copy");
    // テキスト選択の解除
    document.getSelection().empty(copy_target);
        }
