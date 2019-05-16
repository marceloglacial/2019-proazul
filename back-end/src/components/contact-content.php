<main class="container page page-contact">

    {{> components/breadcrumb }}

    <article class="page-article">
        <header class="page-header">
            <h1 class="page-title">Fale Conosco</h1>
            <p class="page-opening">Hac aliquet urna at at egestas commodo mauris ornare a sed parturient in aliquam
                justo senectus conubia nec a a ullamcorper curabitur consectetur adipiscing praesent dui. Placerat </p>
        </header>
        <section class="page-content">
            <form>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Seu nome completo">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Seu email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputTel" class="col-sm-2 col-form-label">Telefone</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="inputTel" placeholder="Seu número de telefone">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleFormControlTextarea" class="col-sm-2 col-form-label">Mensagem</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col text-sm-right">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>

        </section>
    </article>
</main>