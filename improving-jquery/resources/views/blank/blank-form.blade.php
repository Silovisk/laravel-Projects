<div class="container-fluid">
    <form action="{{ route('patient.store') }}" class="global-form" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Nome  requireddo Paciente">
                    <label for="name">Nome</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="birth_date" name="birth_date"
                        placeholder="Data  requiredde Nascimento">
                    <label for="birth_date">Data de Nascimento</label>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email"
                        placeholder="E- requiredmail">
                    <label for="email">E-mail</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="Senha" required>
                    <label for="password">Senha</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control phone" id="phone" name="phone"
                        placeholder="Telefone" required>
                    <label for="phone">Telefone</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control cpf" id="cpf" name="cpf"
                        placeholder="CPF" required>
                    <label for="cpf">CPF</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="gender" name="gender"
                        placeholder="Doença" required>
                    <label for="gender">Gênero</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control weight" id="weight" name="weight"
                        placeholder="Peso" required step="0.01">
                    <label for="weight">Peso</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="illness" name="illness"
                        placeholder="Doença" required>
                    <label for="illness">Doença</label>
                </div>
            </div>
            <hr>
            <div class="col-md-2">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control zipcode" id="zipcode" name="zipcode"
                        placeholder="CEP" required>
                    <label for="zipcode">CEP</label>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-floating mb-6">
                    <input type="text" class="form-control" id="address" name="address"
                        placeholder="Endereço" required>
                    <label for="address">Endereço</label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="number" name="number"
                        placeholder="Número" required>
                    <label for="number">Número</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="neighbourhood"
                        name="neighbourhood" placeholder="Bairro" required>
                    <label for="neighbourhood">Bairro</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="state" name="state"
                        placeholder="Estado" required>
                    <label for="state">Estado</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="city" name="city"
                        placeholder="Cidade" required>
                    <label for="city">Cidade</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="complement" name="complement"
                        placeholder="Complemento" required>
                    <label for="complement">Complemento</label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
</div>
