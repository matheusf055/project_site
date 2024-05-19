// espera a pagina ser carregada 
document.addEventListener('DOMContentLoaded', function() {
    // Extrair parâmetros da query string da URL atual
    const urlParams = new URLSearchParams(window.location.search);
    // pega o link da imagem
    const imgSrc = urlParams.get('imgSrc');
    // pega o titulo do produto
    const titulo = urlParams.get('titulo');
    // pega o preço do produto
    const preco = urlParams.get('preco');
    // pega a descrição curta do produto
    const descricao = urlParams.get('descricao');
    // pega a descrição real
    const descricaoReal = urlParams.get('descricaoReal');

    // atualizar a pagina
    // verificar se o valor de imgSrc é nulo ou vazio e atualiza a pagina
    document.getElementById('produtoImg').src = imgSrc || '';
    // verificar se o valor de titulo é nulo ou vazio e atualiza a pagina
    document.getElementById('tituloProduto').textContent = titulo || '';
    // verificar se o valor de preco é nulo ou vazio e atualiza a pagina
    document.getElementById('precoProduto').textContent = preco || '';
    // verificar se o valor de descricaoReal é nulo ou vazio e atualiza a pagina
    document.getElementById('descricaoProduto').textContent = descricaoReal || descricao || '';
});
 