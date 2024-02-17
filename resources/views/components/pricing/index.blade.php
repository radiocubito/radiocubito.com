<section id="pricing" aria-label="Pricing" class="py-20 sm:py-32">
    <x-container>
        <div class="md:text-center">
            <h2 class="font-display text-3xl tracking-tight text-zinc-950 sm:text-4xl">
                <span class="relative whitespace-nowrap">
                    <span class="relative">Simple pricing,</span>
                </span>
                for everyone.
            </h2>
            <p class="mt-4 text-lg text-zinc-700">Dos planes sencillos, cada uno con una prueba gratuita de 30 días. No se requiere tarjeta de crédito.</p>
        </div>
        <div class="-mx-4 mt-16 grid max-w-2xl grid-cols-1 gap-y-10 sm:mx-auto lg:-mx-8 lg:max-w-none lg:grid-cols-3 xl:mx-0 xl:gap-x-8">
            <x-pricing.plan
                name="Holi"
                price="$490"
                description="Ideal para freelancers, startups o equipos pequeños. "
                href="https://holi.radiocubito.com"
                :features="
                    [
                        'Enlaces ilimitados',
                        'Retención de analíticas por 30 días',
                        '3 dominios personalizados',
                        'Incluye un año de servicio',
                        '$65 MXN/año por los servicios posteriores',
                    ]
                "
            />
            <x-pricing.plan
                featured
                name="Holi Pro"
                price="$790"
                description="Perfecto para negocios en crecimiento, grupos más grandes y empresas que quieren lo mejor."
                href="https://holi.radiocubito.com"
                :features="
                    [
                        'Enlaces ilimitados',
                        'Retención de analíticas por 1 año',
                        '10 dominios personalizados',
                        'Incluye un año de servicio',
                        '$65 MXN/año por los servicios posteriores',
                    ]
                "
            />
        </div>
    </x-container>
</section>
