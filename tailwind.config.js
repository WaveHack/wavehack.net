module.exports = {
    purge: [
        'source/**/*.blade.php',
        'source/**/*.md',
        'source/**/*.html',
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': [
                    'Nunito',
                    'sans-serif'
                ],
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
