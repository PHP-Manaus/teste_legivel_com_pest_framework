<?php

it('define o status padrao de um bug como aberto', function () {
    $status = \App\Models\Bug::statusPadrao();

    expect($status)->toBe('aberto');
});
