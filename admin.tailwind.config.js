module.exports = {
    presets: [require('@macramejs/admin-config/admin/packages/admin-config')],
    content: [
        './resources/admin/**/*.vue',
        './node_modules/@macramejs/**/*.vue',
        './node_modules/@macramejs/**/*.js',
    ],
};
