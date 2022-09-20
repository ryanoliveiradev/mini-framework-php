<?php require_once 'header.php' ?>

<style>
  main {
    word-wrap: break-word;
    max-width: 700px;
    margin: 0 auto;
  }

  .content {
    margin-top: 3rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 2rem;
  }

  .img {
    width: 50%;
  }

  img {
    width: 100%;
    color: red;
  }

  h1{
    font-size: 150%;
    color: red;
  }

  button {
    font-size: 1.5rem;
    padding: 0.8rem 2rem;
    cursor: pointer;
    border: none;
    border-radius: 15px;
    background-color: #f23c78;
    color: #fff;
  }
</style>

<body>
  <main>
    <div class="content">
      <div class="img">
        <img src="https://super.abril.com.br/wp-content/uploads/2020/10/SI_Inteligencia_animal.jpg?quality=90&strip=info&w=1024&resize=1200,800" alt="erro 404">
      </div>
      <h1>OPS! NÃO ENCONTRAMOS ESSA PÁGINA</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus fugiat rerum aperiam ducimus facere quae. Dolores, tenetur excepturi assumenda optio esse quisquam ipsam, porro numquam saepe, praesentium quaerat nulla repudiandae?</p>
      <button id="btn-erro404">Recarregar página</button>
    </div>
  </main>
</body>

<script>
  const btn = document.getElementById("btn-erro404");
  btn.addEventListener("click", () => {
    window.location.reload(true);
  })
</script>

</html>