
let produtoAtualId = null;
function abrirModal(produto) {

    produtoAtualId = produto.id;

    document.getElementById('modalProduto').style.display = 'block';

    document.getElementById('id').value = produto.id;
    document.getElementById('nome').value = produto.nome;
    document.getElementById('preco').value = produto.preco;
    document.getElementById('cat').value = produto.cat;
    document.getElementById('qtd').value = produto.qtd;
    document.getElementById('imagem').value = produto.imagem;
    document.getElementById('desc').value = produto.desc;

    let img = document.getElementById('imgPreview');

    if (produto.imagem && produto.imagem !== "") {
        img.src = produto.imagem;
    } else {
        img.src = "https://via.placeholder.com/300?text=Sem+Imagem";
    }
}
function fecharModal() {
    document.getElementById('modalProduto').style.display = 'none';
}
function excluirProduto() {

    if (!confirm("Tem certeza que deseja excluir este produto?")) {
        return;
    }

    window.location.href = "excluir_produto.php?id=" + produtoAtualId;
}

function filtrarCategoria(valor) {

    if (valor === "") {
        window.location.href = "estoque.php";
    } else {
        window.location.href = "estoque.php?categoria=" + valor;
    }

}

document.addEventListener("DOMContentLoaded", () => {

    const select = document.querySelector(".cabecalho-select");
    const selected = select.querySelector(".select-selected");
    const options = select.querySelector(".select-options");

    selected.addEventListener("click", () => {
        options.style.display =
            options.style.display === "block" ? "none" : "block";
    });

    options.querySelectorAll("div").forEach(option => {
        option.addEventListener("click", () => {
            selected.textContent = option.textContent;
            options.style.display = "none";

            filtrarCategoria(option.dataset.value);
        });
    });

    document.addEventListener("click", (e) => {
        if (!select.contains(e.target)) {
            options.style.display = "none";
        }
    });
});
