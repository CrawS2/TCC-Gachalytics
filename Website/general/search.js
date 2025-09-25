function searchCharacters() {
    const searchInput = document.getElementById("Search").value;
    const formData = new FormData();
    formData.append("search", searchInput);

    fetch("character-list.php", {
        method: "POST",
        body: formData,
    })
    .then((response) => response.text()) // Se o script PHP retorna HTML
    .then((html) => {
        document.getElementById("results-container").innerHTML = html;
    })
    .catch((error) => {
        console.error("Erro ao buscar personagens:", error);
    });
}

// Carregar personagens ao carregar a página
document.addEventListener("DOMContentLoaded", () => {
    searchCharacters(); // Inicializa com todos os personagens
});