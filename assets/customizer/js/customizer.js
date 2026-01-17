document.addEventListener('DOMContentLoaded', function () {
    const canvas = new fabric.Canvas('berlin-canvas');

    // Configuración inicial de ejemplo
    const rect = new fabric.Rect({
        left: 100,
        top: 100,
        fill: '#8D6E63',
        width: 300,
        height: 200,
        rx: 10,
        ry: 10
    });
    canvas.add(rect);

    // Añadir texto
    document.getElementById('add-text-btn').addEventListener('click', function () {
        const textVal = document.getElementById('gravado-text').value;
        if (textVal) {
            const text = new fabric.IText(textVal, {
                left: 150,
                top: 150,
                fontFamily: 'Inter',
                fontSize: 24,
                fill: '#212121'
            });
            canvas.add(text);
            canvas.setActiveObject(text);
        }
    });

    // Cambiar color de base
    document.querySelectorAll('.color-dot').forEach(dot => {
        dot.addEventListener('click', function () {
            rect.set('fill', this.getAttribute('data-color'));
            canvas.renderAll();
        });
    });

    // Exportar SVG para corte láser
    document.getElementById('export-svg').addEventListener('click', function () {
        const svg = canvas.toSVG();
        const blob = new Blob([svg], { type: 'image/svg+xml' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'berlin-artesania-corte.svg';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });
});
