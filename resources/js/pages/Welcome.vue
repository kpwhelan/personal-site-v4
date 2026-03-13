<script setup lang="ts">
import { Form, Head, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import {
    faCode,
    faGlobe,
    faLayerGroup,
    faPlug,
    faScrewdriverWrench,
    faUserGear,
    faLaptopCode,
    faDiagramProject,
    faWindowMaximize,
    faCompassDrafting,
    faListCheck,
    faRocket,
    faShieldHalved,
    faServer,
    faPalette,
    faBars,
    faXmark,
} from '@fortawesome/free-solid-svg-icons';
import InputError from '@/components/InputError.vue';
import heroPhoto from '@/assets/me.png';

const siteUrl = 'https://kevinwhelandev.com';
const siteName = 'Kevin Whelan';
const pageTitle =
    'Kevin Whelan | Freelance Senior Full Stack Engineer for Laravel, APIs, and Business Websites';
const pageDescription =
    'Freelance senior full stack engineer helping startups, small teams, and businesses build custom web applications, Laravel APIs, internal tools, integrations, and modern websites with Laravel, Vue, React, TypeScript, and AWS.';
const contactEmail = 'kevin@kevinwhelandev.com';
const pageImage = `${siteUrl}/images/og-home.jpg`;

const nav = [
    { label: 'What I Do', href: '#services' },
    { label: 'Problems I Solve', href: '#problems' },
    { label: 'About', href: '#about' },
    { label: 'Contact', href: '#contact' },
];

const techGroups = [
    {
        title: 'Backend',
        icon: faServer,
        items: [
            'Laravel',
            'PHP',
            'Node / Express / Nest',
            'MySQL',
            'PostgreSQL',
            'REST APIs',
        ],
    },
    {
        title: 'Frontend',
        icon: faPalette,
        items: [
            'Vue 3',
            'React',
            'TypeScript',
            'Tailwind CSS',
            'Inertia',
            'SPA / SSR',
        ],
    },
    {
        title: 'Infrastructure',
        icon: faShieldHalved,
        items: [
            'AWS',
            'Docker',
            'CI / CD',
            'Linux',
            'Deployment',
            'Integrations',
        ],
    },
];

const helpCards = [
    {
        title: 'Custom Web Applications',
        icon: faLaptopCode,
        text: 'Custom software, dashboards, portals, and internal tools built around real workflows for startups, small teams, and established businesses.',
    },
    {
        title: 'APIs & Integrations',
        icon: faDiagramProject,
        text: 'Laravel APIs, backend services, and third-party integrations that connect your systems, reduce manual work, and make operations more reliable.',
    },
    {
        title: 'Business Websites',
        icon: faWindowMaximize,
        text: 'Modern business websites that build trust, clearly explain what you do, and turn more visitors into qualified leads.',
    },
];

const problemItems = [
    {
        icon: faScrewdriverWrench,
        title: 'Build custom software without agency overhead',
        text: 'You need a custom app, internal tool, or business system, but do not want the cost, layers, or friction of working with a large agency.',
    },
    {
        icon: faCode,
        title: 'Improve or extend an existing Laravel, Vue, or React app',
        text: 'You already have an application in place and need a senior engineer to improve performance, add features, clean up the codebase, or stabilize delivery.',
    },
    {
        icon: faPlug,
        title: 'Connect systems and reduce manual work',
        text: 'Your business relies on multiple tools, spreadsheets, or disconnected processes and needs API integrations or automation to save time.',
    },
    {
        icon: faGlobe,
        title: 'Replace an outdated or underperforming website',
        text: 'Your website feels dated, unclear, slow, or does not reflect the quality of your business, making it harder to earn trust and generate leads.',
    },
    {
        icon: faUserGear,
        title: 'Work directly with someone reliable',
        text: 'You want to work directly with a developer who communicates clearly, understands business needs, and can take ownership without a lot of noise.',
    },
    {
        icon: faLayerGroup,
        title: 'Keep the solution practical and maintainable',
        text: 'You want clean, maintainable code and thoughtful architecture that supports long-term growth without unnecessary complexity.',
    },
];

const processSteps = [
    {
        title: 'Understand the business problem',
        icon: faCompassDrafting,
        text: 'Start with what is actually slowing the business down or creating friction, not just a feature list.',
    },
    {
        title: 'Define clear, realistic scope',
        icon: faListCheck,
        text: 'Break the work into something practical, prioritized, and easy to execute so there is less confusion and more momentum.',
    },
    {
        title: 'Build with steady communication',
        icon: faCode,
        text: 'Move quickly, share progress consistently, and keep the work visible so there are no surprises.',
    },
    {
        title: 'Deliver maintainable software',
        icon: faRocket,
        text: 'Ship something solid, understandable, and easy to support, extend, and improve over time.',
    },
];

const aboutStats = [
    {
        label: 'Focus',
        value: 'Custom software, APIs, internal tools, and business websites',
        icon: faCompassDrafting,
    },
    {
        label: 'Best fit',
        value: 'Startups, small teams, and businesses that need practical execution',
        icon: faLayerGroup,
    },
    {
        label: 'Style',
        value: 'Clear communication, thoughtful builds, low-friction collaboration',
        icon: faUserGear,
    },
];

const heroStyle = computed(() => ({
    background: 'radial-gradient(circle at 20% 20%, #14233A 0%, #0B1220 45%)',
}));

const gridStyle = computed(() => ({
    backgroundImage:
        'linear-gradient(to right, rgba(255,255,255,.14) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,.14) 1px, transparent 1px)',
    backgroundSize: '64px 64px',
}));

const primary = '#3B82F6';
const primaryHover = '#2563EB';

const hoveringPrimary = ref(false);
const mobileMenuOpen = ref(false);

const page = usePage();

const flashSuccess = computed(
    () => page.props.flash?.success as string | undefined,
);

const flashError = computed(
    () => page.props.flash?.error as string | undefined,
);

const structuredData = computed(() => ({
    '@context': 'https://schema.org',
    '@graph': [
        {
            '@type': 'Person',
            name: 'Kevin Whelan',
            url: siteUrl,
            image: `${siteUrl}/images/me.png`,
            jobTitle: 'Senior Full Stack Engineer',
            description: pageDescription,
            email: `mailto:${contactEmail}`,
            knowsAbout: [
                'Laravel',
                'Vue',
                'React',
                'TypeScript',
                'AWS',
                'API Development',
                'Business Websites',
                'Custom Software Development',
                'Internal Tools',
                'Web Application Development',
            ],
        },
        {
            '@type': 'WebSite',
            name: siteName,
            url: siteUrl,
            description: pageDescription,
        },
        {
            '@type': 'WebPage',
            name: pageTitle,
            url: siteUrl,
            description: pageDescription,
            isPartOf: {
                '@type': 'WebSite',
                name: siteName,
                url: siteUrl,
            },
            about: {
                '@type': 'Person',
                name: 'Kevin Whelan',
            },
        },
        {
            '@type': 'ProfessionalService',
            name: 'Kevin Whelan',
            url: siteUrl,
            description:
                'Freelance full stack development services including custom software development, API development, internal tools, integrations, and modern business websites.',
            areaServed: 'United States',
            serviceType: [
                'Custom Software Development',
                'Web Application Development',
                'API Development',
                'Business Website Development',
                'Internal Tool Development',
                'Software Integrations',
            ],
            provider: {
                '@type': 'Person',
                name: 'Kevin Whelan',
            },
            email: contactEmail,
        },
    ],
}));

const structuredDataJson = computed(() => JSON.stringify(structuredData.value));
</script>

<template>
    <Head>
        <title>{{ pageTitle }}</title>

        <meta name="description" :content="pageDescription" />
        <meta name="robots" content="index,follow,max-image-preview:large" />
        <meta name="author" content="Kevin Whelan" />
        <link rel="canonical" :href="siteUrl" />

        <meta property="og:type" content="website" />
        <meta property="og:site_name" :content="siteName" />
        <meta property="og:title" :content="pageTitle" />
        <meta property="og:description" :content="pageDescription" />
        <meta property="og:url" :content="siteUrl" />
        <meta property="og:image" :content="pageImage" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" :content="pageTitle" />
        <meta name="twitter:description" :content="pageDescription" />
        <meta name="twitter:image" :content="pageImage" />

        <meta name="theme-color" content="#08111d" />

        <component :is="'script'" type="application/ld+json">
            {{ structuredDataJson }}
        </component>
    </Head>

    <div class="bg-[#08111d] text-white">
        <a
            href="#main-content"
            class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:rounded-md focus:bg-white focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-[#08111d] focus:outline-none"
        >
            Skip to main content
        </a>

        <header class="relative overflow-hidden" :style="heroStyle">
            <div
                class="pointer-events-none absolute inset-0 opacity-[0.05]"
                :style="gridStyle"
                aria-hidden="true"
            />

            <div
                class="pointer-events-none absolute -top-24 -left-24 h-80 w-80 rounded-full opacity-30 blur-3xl"
                :style="{ background: primary }"
                aria-hidden="true"
            />

            <div class="relative mx-auto max-w-7xl px-4 py-4 sm:px-6 sm:py-6 md:py-8">
                <div class="flex items-center justify-between">
                    <a
                        href="/"
                        class="rounded text-sm font-semibold tracking-tight text-white sm:text-base focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none"
                        aria-label="Kevin Whelan home"
                    >
                        Kevin Whelan
                    </a>

                    <nav
                        aria-label="Primary"
                        class="hidden items-center gap-7 text-sm text-white/85 md:flex"
                    >
                        <a
                            v-for="item in nav"
                            :key="item.href"
                            :href="item.href"
                            class="rounded transition hover:text-white focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none"
                        >
                            {{ item.label }}
                        </a>

                        <a
                            href="#contact"
                            class="rounded-full px-4 py-2 text-sm font-medium text-white transition hover:bg-white/20 focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none"
                            style="background: #1f2937"
                        >
                            Get in touch
                        </a>
                    </nav>

                    <button
                        type="button"
                        class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-white transition hover:bg-white/10 focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none md:hidden"
                        :aria-expanded="mobileMenuOpen ? 'true' : 'false'"
                        aria-controls="mobile-navigation"
                        :aria-label="mobileMenuOpen ? 'Close navigation menu' : 'Open navigation menu'"
                        @click="mobileMenuOpen = !mobileMenuOpen"
                    >
                        <FontAwesomeIcon
                            :icon="mobileMenuOpen ? faXmark : faBars"
                            class="text-lg"
                        />
                    </button>
                </div>

                <nav
                    v-if="mobileMenuOpen"
                    id="mobile-navigation"
                    aria-label="Mobile"
                    class="mt-4 rounded-2xl border border-white/10 bg-[#0d1726]/95 p-3 shadow-2xl backdrop-blur md:hidden"
                >
                    <ul class="space-y-1">
                        <li v-for="item in nav" :key="item.href">
                            <a
                                :href="item.href"
                                class="block rounded-lg px-3 py-3 text-sm text-white/90 transition hover:bg-white/10 focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:outline-none"
                                @click="mobileMenuOpen = false"
                            >
                                {{ item.label }}
                            </a>
                        </li>
                        <li>
                            <a
                                href="#contact"
                                class="mt-2 block rounded-lg bg-white/10 px-3 py-3 text-sm font-medium text-white transition hover:bg-white/15 focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:outline-none"
                                @click="mobileMenuOpen = false"
                            >
                                Get in touch
                            </a>
                        </li>
                    </ul>
                </nav>

                <section
                    class="mt-8 grid items-start gap-8 sm:mt-10 md:mt-12 md:grid-cols-12 md:gap-10 lg:gap-14"
                    aria-labelledby="home-hero-title"
                >
                    <div class="order-1 md:col-span-7">
                        <div class="max-w-3xl">
                            <p
                                class="inline-flex max-w-full flex-wrap items-center gap-2 rounded-full border border-white/10 bg-white/[0.08] px-3 py-2 text-xs font-medium text-white/95 shadow-sm backdrop-blur sm:px-4 sm:text-sm"
                            >
                                <span
                                    class="h-2.5 w-2.5 rounded-full"
                                    :style="{ background: primary }"
                                    aria-hidden="true"
                                />
                                Freelance Senior Full Stack Engineer • Laravel • Vue • React • APIs • AWS
                            </p>

                            <h1
                                id="home-hero-title"
                                class="mt-5 max-w-5xl text-3xl font-semibold tracking-tight text-white sm:mt-6 sm:text-5xl lg:text-[4.2rem] lg:leading-[0.98]"
                            >
                                Custom software, APIs, and modern business websites
                                <span class="mt-2 block text-white/72">
                                    Built by a senior engineer who works directly with you
                                </span>
                            </h1>

                            <p
                                class="mt-5 max-w-3xl text-base leading-7 text-white/88 sm:mt-7 sm:text-xl sm:leading-8"
                            >
                                I help startups, small teams, and businesses build custom web applications, Laravel APIs, internal tools, software integrations, and modern websites that are clear, maintainable, and grounded in real business needs.
                            </p>

                            <p
                                class="mt-4 max-w-3xl text-sm leading-7 text-white/72 sm:text-lg"
                            >
                                Best fit for teams that need a freelance Laravel developer, full stack engineer, or technical partner who can design, build, improve, and ship practical software without unnecessary complexity.
                            </p>

                            <div class="mt-7 flex flex-col gap-3 sm:mt-9 sm:flex-row sm:flex-wrap">
                                <a
                                    href="#contact"
                                    class="w-full rounded-xl px-6 py-3.5 text-center text-sm font-semibold text-white shadow-lg shadow-black/20 transition focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none sm:w-auto"
                                    :style="{
                                        background: hoveringPrimary
                                            ? primaryHover
                                            : primary,
                                    }"
                                    @mouseenter="hoveringPrimary = true"
                                    @mouseleave="hoveringPrimary = false"
                                >
                                    Start a conversation
                                </a>

                                <a
                                    href="#services"
                                    class="w-full rounded-xl border border-white/15 bg-white/5 px-6 py-3.5 text-center text-sm font-semibold text-white/95 transition hover:bg-white/10 focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#08111d] focus-visible:outline-none sm:w-auto"
                                >
                                    View services
                                </a>
                            </div>

                            <div class="mt-8 grid gap-4 sm:mt-10 sm:grid-cols-3">
                                <div
                                    class="rounded-2xl border border-white/10 bg-white/[0.05] p-4 backdrop-blur"
                                >
                                    <p class="text-sm text-white/65">
                                        Best fit
                                    </p>
                                    <p
                                        class="mt-2 text-sm leading-relaxed font-medium text-white/92"
                                    >
                                        Custom apps, internal tools, APIs, and business websites
                                    </p>
                                </div>

                                <div
                                    class="rounded-2xl border border-white/10 bg-white/[0.05] p-4 backdrop-blur"
                                >
                                    <p class="text-sm text-white/65">
                                        Working style
                                    </p>
                                    <p
                                        class="mt-2 text-sm leading-relaxed font-medium text-white/92"
                                    >
                                        Clear communication, thoughtful execution, low friction
                                    </p>
                                </div>

                                <div
                                    class="rounded-2xl border border-white/10 bg-white/[0.05] p-4 backdrop-blur"
                                >
                                    <p class="text-sm text-white/65">
                                        Response time
                                    </p>
                                    <p
                                        class="mt-2 text-sm leading-relaxed font-medium text-white/92"
                                    >
                                        Within 1 business day
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-2 md:col-span-5">
                        <div
                            class="relative mx-auto mt-2 max-w-[18rem] sm:max-w-sm md:mt-0 md:max-w-lg md:mr-0 md:ml-auto"
                        >
                            <div
                                class="pointer-events-none absolute -inset-4 sm:-inset-6 rounded-[2.5rem] opacity-40 blur-2xl"
                                :style="{
                                    background:
                                        'radial-gradient(circle at 30% 30%, rgba(59,130,246,.35), transparent 70%)',
                                }"
                                aria-hidden="true"
                            />

                            <div
                                class="relative overflow-hidden rounded-[1.75rem] sm:rounded-[2rem] border border-white/10 bg-white/[0.04] shadow-2xl shadow-black/20"
                            >
                                <div class="aspect-[4/5] w-full sm:aspect-[2/3]">
                                    <img
                                        :src="heroPhoto"
                                        alt="Kevin Whelan, freelance senior full stack engineer"
                                        class="h-full w-full object-cover object-top brightness-[1.08] contrast-[1.04] saturate-[1.02] md:object-center"
                                        loading="eager"
                                        fetchpriority="high"
                                        decoding="async"
                                    />
                                </div>

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/18 via-black/4 to-transparent"
                                    aria-hidden="true"
                                />

                                <div
                                    class="pointer-events-none absolute inset-0 rounded-[1.75rem] sm:rounded-[2rem] ring-1 ring-white/10"
                                    aria-hidden="true"
                                />

                                <div
                                    class="absolute inset-x-3 bottom-3 sm:inset-x-5 sm:bottom-5"
                                >
                                    <div
                                        class="rounded-2xl border border-white/15 bg-white/10 p-3 shadow-lg shadow-black/20 backdrop-blur-md sm:p-4"
                                    >
                                        <p
                                            class="inline-flex items-center gap-2 rounded-full border border-white/15 bg-white/10 px-3 py-1.5 text-xs text-white/95 sm:text-sm"
                                        >
                                            <span
                                                class="h-2 w-2 rounded-full"
                                                :style="{ background: primary }"
                                                aria-hidden="true"
                                            />
                                            Available for contract work
                                        </p>

                                        <p
                                            class="mt-3 text-sm leading-snug font-semibold text-white sm:text-lg"
                                        >
                                            Thoughtful builds for products, platforms, and growing businesses
                                        </p>

                                        <p class="mt-1 text-xs text-white/85 sm:text-sm">
                                            Startups • small teams • businesses
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>

        <main id="main-content">
            <section
                id="services"
                aria-labelledby="services-title"
                class="border-t border-white/5 bg-[#0A1320]"
            >
                <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20">
                    <div class="max-w-3xl">
                        <p
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                        >
                            <span
                                class="h-2 w-2 rounded-full"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            />
                            What I do
                        </p>

                        <h2
                            id="services-title"
                            class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                        >
                            Practical software and website work for real business needs
                        </h2>

                        <p
                            class="mt-4 text-lg leading-relaxed text-white/80"
                        >
                            I help clients plan, build, improve, and modernize custom software, web applications, APIs, internal tools, and business websites with a focus on clear execution, maintainable code, and useful outcomes.
                        </p>
                    </div>

                    <div class="mt-10 grid gap-5 md:grid-cols-3">
                        <article
                            v-for="card in helpCards"
                            :key="card.title"
                            class="group relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-gradient-to-br from-white/[0.07] to-white/[0.03] p-6 backdrop-blur transition duration-300 hover:-translate-y-1.5 hover:border-white/20 hover:shadow-2xl hover:shadow-black/20"
                        >
                            <div
                                class="absolute inset-y-0 left-0 w-1 rounded-l-[1.75rem]"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            />
                            <div
                                class="pointer-events-none absolute -right-16 -top-16 h-32 w-32 rounded-full bg-white/[0.03] blur-2xl transition duration-300 group-hover:bg-white/[0.05]"
                                aria-hidden="true"
                            />

                            <div class="relative">
                                <div
                                    class="flex h-11 w-11 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.06] text-white/85 transition duration-300 group-hover:border-white/20 group-hover:bg-white/[0.1] group-hover:text-white"
                                >
                                    <FontAwesomeIcon
                                        :icon="card.icon"
                                        class="text-base"
                                    />
                                </div>

                                <h3
                                    class="mt-5 text-lg font-semibold text-white"
                                >
                                    {{ card.title }}
                                </h3>
                                <p
                                    class="mt-3 text-sm leading-7 text-white/78"
                                >
                                    {{ card.text }}
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section
                id="problems"
                aria-labelledby="problems-title"
                class="border-t border-white/5 bg-[#09111c]"
            >
                <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20">
                    <div class="max-w-3xl">
                        <p
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                        >
                            <span
                                class="h-2 w-2 rounded-full"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            ></span>
                            Problem-focused work
                        </p>

                        <h2
                            id="problems-title"
                            class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                        >
                            Problems I Solve
                        </h2>

                        <p class="mt-4 text-lg leading-relaxed text-white/80">
                            Most clients come to me because something important needs to be built, fixed, improved, modernized, or made easier to maintain. These are the kinds of software and website problems I commonly help solve.
                        </p>
                    </div>

                    <div class="mt-10 grid gap-5 md:grid-cols-2">
                        <article
                            v-for="item in problemItems"
                            :key="item.title"
                            class="group relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-gradient-to-br from-white/[0.07] to-white/[0.03] p-6 backdrop-blur transition duration-300 hover:-translate-y-1.5 hover:border-white/20 hover:shadow-2xl hover:shadow-black/20"
                        >
                            <div
                                class="absolute inset-y-0 left-0 w-1 rounded-l-[1.75rem] transition duration-300 group-hover:w-1.5"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            />
                            <div
                                class="pointer-events-none absolute -right-16 -top-16 h-36 w-36 rounded-full bg-white/[0.03] blur-2xl transition duration-300 group-hover:bg-white/[0.05]"
                                aria-hidden="true"
                            />

                            <div class="relative flex items-start gap-4">
                                <div
                                    class="mt-0.5 flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.06] text-white/85 transition duration-300 group-hover:border-white/20 group-hover:bg-white/[0.1] group-hover:text-white"
                                >
                                    <FontAwesomeIcon
                                        :icon="item.icon"
                                        class="text-base"
                                    />
                                </div>

                                <div>
                                    <h3 class="text-base font-semibold text-white">
                                        {{ item.title }}
                                    </h3>
                                    <p class="mt-2 text-sm leading-7 text-white/78">
                                        {{ item.text }}
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            <section
                aria-labelledby="process-title"
                class="border-t border-white/5 bg-[#0A1320]"
            >
                <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20">
                    <div class="max-w-3xl">
                        <p
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                        >
                            <span
                                class="h-2 w-2 rounded-full"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            />
                            Process
                        </p>

                        <h2
                            id="process-title"
                            class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                        >
                            How I Work
                        </h2>

                        <p
                            class="mt-4 text-lg leading-relaxed text-white/80"
                        >
                            Clear scope, steady communication, and software work that is designed to stay useful long after launch.
                        </p>
                    </div>

                    <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                        <article
                            v-for="(step, index) in processSteps"
                            :key="step.title"
                            class="group relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-gradient-to-br from-white/[0.07] to-white/[0.03] p-6 backdrop-blur transition duration-300 hover:-translate-y-1.5 hover:border-white/20 hover:shadow-2xl hover:shadow-black/20"
                        >
                            <div
                                class="absolute inset-y-0 left-0 w-1 rounded-l-[1.75rem]"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            />
                            <div
                                class="pointer-events-none absolute -right-14 -top-14 h-28 w-28 rounded-full bg-white/[0.03] blur-2xl transition duration-300 group-hover:bg-white/[0.05]"
                                aria-hidden="true"
                            />

                            <div class="relative">
                                <div
                                    class="flex items-center justify-between gap-4"
                                >
                                    <div
                                        class="flex h-11 w-11 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.06] text-white/85 transition duration-300 group-hover:border-white/20 group-hover:bg-white/[0.1] group-hover:text-white"
                                    >
                                        <FontAwesomeIcon
                                            :icon="step.icon"
                                            class="text-base"
                                        />
                                    </div>

                                    <span class="text-sm text-white/45">
                                        0{{ index + 1 }}
                                    </span>
                                </div>

                                <h3
                                    class="mt-5 text-base font-semibold text-white"
                                >
                                    {{ step.title }}
                                </h3>
                                <p
                                    class="mt-3 text-sm leading-7 text-white/78"
                                >
                                    {{ step.text }}
                                </p>
                            </div>
                        </article>
                    </div>

                    <div
                        class="mt-10 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between"
                    >
                        <a
                            href="#contact"
                            class="rounded-xl px-5 py-3 text-center text-sm font-semibold text-white transition focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#0A1320] focus-visible:outline-none"
                            :style="{ background: primary }"
                        >
                            Start a conversation
                        </a>

                        <p
                            class="text-center text-sm text-white/70 sm:text-right"
                        >
                            Prefer email?
                            <a
                                class="rounded underline transition hover:text-white focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:outline-none"
                                :href="`mailto:${contactEmail}`"
                            >
                                {{ contactEmail }}
                            </a>
                        </p>
                    </div>
                </div>
            </section>

            <section
                id="about"
                aria-labelledby="about-title"
                class="border-t border-white/5 bg-[#09111c]"
            >
                <div
                    class="mx-auto grid max-w-6xl gap-10 px-4 py-16 sm:px-6 sm:py-20 md:grid-cols-12 md:items-start"
                >
                    <div class="md:col-span-7">
                        <p
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                        >
                            <span
                                class="h-2 w-2 rounded-full"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            ></span>
                            About Kevin
                        </p>

                        <h2
                            id="about-title"
                            class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                        >
                            Senior full stack engineer with a practical, product-minded approach
                        </h2>

                        <div class="mt-6 space-y-4 text-white/80">
                            <p class="leading-relaxed">
                                I enjoy building software that is simple, reliable, and genuinely useful for the people who depend on it every day. My background includes full stack development across Laravel, Vue, React, TypeScript, APIs, and AWS.
                            </p>

                            <p class="leading-relaxed">
                                I work best with startups, small teams, and businesses that value clear thinking, direct communication, clean execution, and software that supports real operations instead of getting in the way.
                            </p>

                            <p class="leading-relaxed">
                                Whether the project is a custom web application, a Laravel API, an internal dashboard, a software integration, or a modern business website, my goal is always the same: build something solid, understandable, and worth maintaining.
                            </p>
                        </div>
                    </div>

                    <aside
                        class="md:col-span-5"
                        aria-labelledby="at-a-glance-title"
                    >
                        <div class="space-y-4">
                            <h3
                                id="at-a-glance-title"
                                class="text-lg font-semibold text-white"
                            >
                                At a glance
                            </h3>

                            <article
                                v-for="stat in aboutStats"
                                :key="stat.label"
                                class="group relative overflow-hidden rounded-[1.5rem] border border-white/10 bg-gradient-to-br from-white/[0.07] to-white/[0.03] p-5 backdrop-blur transition duration-300 hover:-translate-y-1 hover:border-white/20 hover:shadow-xl hover:shadow-black/20"
                            >
                                <div
                                    class="absolute inset-y-0 left-0 w-1 rounded-l-[1.5rem]"
                                    :style="{ background: primary }"
                                    aria-hidden="true"
                                />
                                <div class="relative flex items-start gap-4">
                                    <div
                                        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.06] text-white/85 transition duration-300 group-hover:border-white/20 group-hover:bg-white/[0.1] group-hover:text-white"
                                    >
                                        <FontAwesomeIcon
                                            :icon="stat.icon"
                                            class="text-sm"
                                        />
                                    </div>

                                    <div>
                                        <dt class="text-sm text-white/65">
                                            {{ stat.label }}
                                        </dt>
                                        <dd
                                            class="mt-1 text-sm font-medium leading-relaxed text-white/92"
                                        >
                                            {{ stat.value }}
                                        </dd>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </aside>
                </div>
            </section>

            <section
                aria-labelledby="tech-title"
                class="border-t border-white/5 bg-[#0A1320]"
            >
                <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20">
                    <div class="max-w-3xl">
                        <p
                            class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                        >
                            <span
                                class="h-2 w-2 rounded-full"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            ></span>
                            Technologies
                        </p>

                        <h2
                            id="tech-title"
                            class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                        >
                            Tools I Work With
                        </h2>

                        <p class="mt-4 text-lg leading-relaxed text-white/80">
                            I focus on dependable, widely used tools that make it easier to build clean products, maintain them over time, and move quickly without unnecessary complexity.
                        </p>
                    </div>

                    <div class="mt-10 grid gap-5 md:grid-cols-3">
                        <section
                            v-for="group in techGroups"
                            :key="group.title"
                            class="group relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-gradient-to-br from-white/[0.07] to-white/[0.03] p-6 transition duration-300 hover:-translate-y-1.5 hover:border-white/20 hover:shadow-2xl hover:shadow-black/20"
                            :aria-labelledby="`tech-${group.title.toLowerCase().replace(/[^a-z0-9]+/g, '-')}`"
                        >
                            <div
                                class="absolute inset-y-0 left-0 w-1 rounded-l-[1.75rem]"
                                :style="{ background: primary }"
                                aria-hidden="true"
                            />
                            <div
                                class="pointer-events-none absolute -right-16 -top-16 h-32 w-32 rounded-full bg-white/[0.03] blur-2xl transition duration-300 group-hover:bg-white/[0.05]"
                                aria-hidden="true"
                            />

                            <div class="relative">
                                <div
                                    class="flex h-11 w-11 items-center justify-center rounded-2xl border border-white/10 bg-white/[0.06] text-white/85 transition duration-300 group-hover:border-white/20 group-hover:bg-white/[0.1] group-hover:text-white"
                                >
                                    <FontAwesomeIcon
                                        :icon="group.icon"
                                        class="text-base"
                                    />
                                </div>

                                <h3
                                    :id="`tech-${group.title.toLowerCase().replace(/[^a-z0-9]+/g, '-')}`"
                                    class="mt-5 text-lg font-semibold text-white"
                                >
                                    {{ group.title }}
                                </h3>

                                <ul
                                    class="mt-5 flex flex-wrap gap-2"
                                    role="list"
                                >
                                    <li
                                        v-for="item in group.items"
                                        :key="item"
                                    >
                                        <span
                                            class="rounded-full border border-white/10 bg-black/20 px-3 py-1 text-sm text-white/85 transition duration-300 hover:border-white/20 hover:bg-black/30"
                                        >
                                            {{ item }}
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </section>

            <section
                id="contact"
                aria-labelledby="contact-title"
                class="border-t border-white/5 bg-[#09111c]"
            >
                <div class="mx-auto max-w-6xl px-4 py-16 sm:px-6 sm:py-20">
                    <div class="grid gap-10 md:grid-cols-12">
                        <div class="md:col-span-5">
                            <div
                                class="relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-gradient-to-br from-white/[0.07] to-white/[0.03] p-6 backdrop-blur"
                            >
                                <div
                                    class="absolute inset-y-0 left-0 w-1 rounded-l-[1.75rem]"
                                    :style="{ background: primary }"
                                    aria-hidden="true"
                                />
                                <div
                                    class="pointer-events-none absolute -right-16 -top-16 h-36 w-36 rounded-full bg-white/[0.03] blur-2xl"
                                    aria-hidden="true"
                                />

                                <div class="relative">
                                    <p
                                        class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/85"
                                    >
                                        <span
                                            class="h-2 w-2 rounded-full"
                                            :style="{ background: primary }"
                                            aria-hidden="true"
                                        ></span>
                                        Contact
                                    </p>

                                    <h2
                                        id="contact-title"
                                        class="mt-5 text-3xl font-semibold tracking-tight text-white sm:text-4xl"
                                    >
                                        Let’s Talk About Your Project
                                    </h2>

                                    <p
                                        class="mt-4 max-w-xl text-lg leading-relaxed text-white/80"
                                    >
                                        Whether you need a custom web application, Laravel API work, improvements to an existing product, internal tooling, integrations, or a better business website, send me a note and I’ll get back to you.
                                    </p>

                                    <div
                                        class="mt-8 space-y-3 text-sm text-white/80"
                                    >
                                        <p>
                                            Email:
                                            <a
                                                :href="`mailto:${contactEmail}`"
                                                class="rounded underline transition hover:text-white focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:outline-none"
                                            >
                                                {{ contactEmail }}
                                            </a>
                                        </p>
                                        <p>
                                            Response time: Within 1 business day
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:col-span-7">
                            <div
                                class="relative overflow-hidden rounded-[1.75rem] border border-white/10 bg-gradient-to-br from-white/[0.07] to-white/[0.03] p-6 backdrop-blur transition duration-300 hover:border-white/20 hover:shadow-2xl hover:shadow-black/20"
                            >
                                <div
                                    class="absolute inset-y-0 left-0 w-1 rounded-l-[1.75rem]"
                                    :style="{ background: primary }"
                                    aria-hidden="true"
                                />
                                <div
                                    class="pointer-events-none absolute -right-16 -top-16 h-36 w-36 rounded-full bg-white/[0.03] blur-2xl"
                                    aria-hidden="true"
                                />

                                <Form
                                    action="/contact"
                                    method="post"
                                    reset-on-success
                                    :options="{ preserveScroll: true }"
                                    v-slot="{ errors, processing }"
                                    class="relative grid gap-4"
                                >
                                    <div class="grid gap-4 sm:grid-cols-2">
                                        <div>
                                            <label
                                                class="mb-2 block text-sm text-white/85"
                                                for="name"
                                            >
                                                Name
                                            </label>
                                            <input
                                                id="name"
                                                name="name"
                                                type="text"
                                                autocomplete="name"
                                                required
                                                class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white transition outline-none placeholder:text-white/45 focus:border-white/25 focus:bg-black/40 focus-visible:ring-2 focus-visible:ring-white/70"
                                                placeholder="Your name"
                                            />
                                            <InputError
                                                :message="errors.name"
                                                class="mt-2"
                                            />
                                        </div>

                                        <div>
                                            <label
                                                class="mb-2 block text-sm text-white/85"
                                                for="email"
                                            >
                                                Email
                                            </label>
                                            <input
                                                id="email"
                                                name="email"
                                                type="email"
                                                inputmode="email"
                                                autocomplete="email"
                                                required
                                                class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white transition outline-none placeholder:text-white/45 focus:border-white/25 focus:bg-black/40 focus-visible:ring-2 focus-visible:ring-white/70"
                                                placeholder="you@example.com"
                                            />
                                            <InputError
                                                :message="errors.email"
                                                class="mt-2"
                                            />
                                        </div>
                                    </div>

                                    <div>
                                        <label
                                            class="mb-2 block text-sm text-white/85"
                                            for="company"
                                        >
                                            Company
                                            <span class="text-white/55"
                                                >(optional)</span
                                            >
                                        </label>
                                        <input
                                            id="company"
                                            name="company"
                                            type="text"
                                            autocomplete="organization"
                                            class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white transition outline-none placeholder:text-white/45 focus:border-white/25 focus:bg-black/40 focus-visible:ring-2 focus-visible:ring-white/70"
                                            placeholder="Company or team name"
                                        />
                                        <InputError
                                            :message="errors.company"
                                            class="mt-2"
                                        />
                                    </div>

                                    <div>
                                        <label
                                            class="mb-2 block text-sm text-white/85"
                                            for="message"
                                        >
                                            What are you trying to build?
                                        </label>
                                        <textarea
                                            id="message"
                                            name="message"
                                            rows="6"
                                            required
                                            aria-describedby="message-help"
                                            class="w-full rounded-xl border border-white/10 bg-black/30 px-4 py-3 text-sm text-white transition outline-none placeholder:text-white/45 focus:border-white/25 focus:bg-black/40 focus-visible:ring-2 focus-visible:ring-white/70"
                                            placeholder="A few details about the project, what you need help with, and any timeline you have in mind."
                                        ></textarea>
                                        <p
                                            id="message-help"
                                            class="mt-2 text-sm text-white/65"
                                        >
                                            A short summary is perfect. Include goals, timing, tech stack if relevant, and anything already in place.
                                        </p>
                                        <InputError
                                            :message="errors.message"
                                            class="mt-2"
                                        />
                                    </div>

                                    <div class="pt-2">
                                        <button
                                            type="submit"
                                            :disabled="processing"
                                            class="inline-flex items-center justify-center rounded-lg px-6 py-3 text-sm font-semibold text-white transition focus-visible:ring-2 focus-visible:ring-white/80 focus-visible:ring-offset-2 focus-visible:ring-offset-[#09111c] focus-visible:outline-none disabled:cursor-not-allowed disabled:opacity-70"
                                            :style="{ background: primary }"
                                        >
                                            <svg
                                                v-if="processing"
                                                class="mr-2 h-4 w-4 animate-spin"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                aria-hidden="true"
                                            >
                                                <circle
                                                    class="opacity-25"
                                                    cx="12"
                                                    cy="12"
                                                    r="10"
                                                    stroke="currentColor"
                                                    stroke-width="4"
                                                />
                                                <path
                                                    class="opacity-90"
                                                    fill="currentColor"
                                                    d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
                                                />
                                            </svg>
                                            {{
                                                processing
                                                    ? 'Sending...'
                                                    : 'Send message'
                                            }}
                                        </button>

                                        <InputError
                                            :message="errors.form"
                                            class="mt-3"
                                        />

                                        <p
                                            v-if="flashSuccess"
                                            aria-live="polite"
                                            class="mt-3 rounded-xl border border-emerald-400/20 bg-emerald-400/10 px-4 py-3 text-sm text-emerald-200"
                                        >
                                            {{ flashSuccess }}
                                        </p>

                                        <p
                                            v-if="flashError"
                                            aria-live="assertive"
                                            class="mt-3 rounded-xl border border-red-400/20 bg-red-400/10 px-4 py-3 text-sm text-red-200"
                                        >
                                            {{ flashError }}
                                        </p>
                                    </div>
                                </Form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="border-t border-white/5 bg-[#08111d]">
            <div class="mx-auto max-w-6xl px-4 py-8 text-sm text-white/65 sm:px-6">
                <p>
                    © {{ new Date().getFullYear() }} Kevin Whelan. All rights
                    reserved.
                </p>
            </div>
        </footer>
    </div>
</template>
