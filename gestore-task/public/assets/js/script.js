function aggiungiTask(nome, descrizione) {
    $.ajax({
        url: "/add_task",
        method: "POST",
        dataType: "json",
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        data: {
            nome : nome,
            descrizione : descrizione
        }
    }).then(() => {
        console.log("Task creato");
    });
}
