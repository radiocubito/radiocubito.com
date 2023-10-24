<x-layouts.html>
    <div class="flex min-h-screen flex-col">
        <header class="pt-4">
            <nav class="mx-auto max-w-5xl px-8 md:px-14 lg:px-16">
                <div class="flex justify-between py-3 sm:pt-0">
                    <div class="flex w-full justify-between">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="/monitor" class="font-display text-xl block lg:flex space-x-3 items-center">
                                Radiocúbito Monitor
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <main class="flex-1 pt-6">
            <section class="lg:pt-4">
                <div class="space-y-5 mx-auto max-w-5xl px-8 md:px-14 lg:px-16">
                    <h1 class="font-display text-[26px] leading-[32px] sm:text-3xl md:text-5xl md:leading-[55px] font-bold text-black">
                        Monitoreo de sitios web.
                    </h1>
                    <p class="text-base md:text-lg font-medium text-gray-600">
                        <span class="text-gray-900">Monitorea</span>
                        que tus sitios web estén en activos, y <span class="text-gray-900">recibe</span>
                        <br class="hidden md:block">
                        <span class="text-gray-900">notificaciones</span> por email
                        cuando alguno se haya caído
                        <span class="text-gray-900">caído</span>.
                    </p>
                </div>
                <div class="z-20 pt-8 relative mx-auto max-w-5xl px-8 md:px-14 lg:px-16">
                    <a href="https://github.com/radiocubito/monitor" type="button" target="_blank" class="appearance-none inline-flex hover:shadow-2xl transition-all duration-300 hover:scale-105 items-center group space-x-2.5 bg-black text-white py-4 px-5 rounded-2xl cursor-pointer">
                        <span class="w-full font-semibold text-base">Comenzar</span>
                        <svg class="inline-block h-6" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 12.4999H21L14 19.4999M14 5.5L18 9.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </section>
        </main>
        <footer class="border-t border-gray-200">
            <div class="mx-auto max-w-5xl px-8 md:px-14 lg:px-16 py-6">
                <div class="md:flex md:items-center md:justify-between">
                    <div class="flex space-x-6 md:order-2">
                        <a href="https://twitter.com/oliverservin_" class="text-gray-900 hover:text-gray-800">
                            <span class="sr-only">X</span>
                            <svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="https://github.com/radiocubito/monitor" class="text-gray-900 hover:text-gray-800">
                            <span class="sr-only">GitHub</span>
                            <svg fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <p class="mt-8 text-base text-gray-900 md:mt-0 md:order-1">
                        © {{ date('Y') }} Radiocúbito. Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </footer>
    </div>
</x-layouts.html>
