<x-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="container mx-auto px-4 py-8">
            <div class="text-center mb-8">
                <div class="flex items-center justify-center gap-2 mb-4">
                    <x-svg.truck class="w-10 h-10 text-primary" />
                    <h1 class="text-3xl font-bold text-gray-900">FreteBel</h1>
                </div>
                <p class="text-gray-600 text-lg">Conectando clientes e motoristas de frete local</p>
            </div>
            <div class="max-w-md mx-auto">
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="p-6">
                        <div class="text-center mb-6">
                            <h2 id="form-title" class="text-2xl font-bold text-gray-900">Entrar na sua conta</h2>
                            <p id="form-description" class="text-gray-600 mt-2">Acesse sua conta FreteBel</p>
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Tipo de usuário</label>
                            <div class="grid grid-cols-2 gap-2 p-1 bg-gray-100 rounded-lg">
                                <a href="{{ route('login-customer') }}"
                                    class="flex items-center justify-center gap-2 py-2 px-3 rounded-md text-sm font-medium transition-colors  text-gray-600  shadow-sm">
                                    <x-svg.user class="w-5 h-5 text-primary" />
                                    Cliente
                                </a>
                                <div
                                    class="flex items-center justify-center gap-2 py-2 px-3 rounded-md text-sm font-medium select-none transition-colors bg-white hover:text-gray-900">
                                    <x-svg.truck class="w-6 h-6 text-primary" />
                                    Motorista
                                </div>
                            </div>
                        </div>

                        <form>
                            <div class="mb-4">
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700 mb-1">E-mail</label>
                                <div class="relative">
                                    <input type="email" id="email" placeholder="seu@email.com" required
                                        class="w-full pl-3 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Senha</label>
                                <div class="relative">
                                    <input type="password" id="password" placeholder="Sua senha" required
                                        class="w-full pl-3 pr-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                </div>
                            </div>

                            <button type="submit" id="submit-btn"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-md transition-colors text-lg">
                                Entrar
                            </button>
                        </form>

                        <div class="text-center mt-4">
                            <a href="{{ route('register-driver') }}" class="text-blue-600 hover:text-blue-700 text-sm">
                                Não tem conta? Cadastre-se
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
