async function loadFile(url) {
    const response = await fetch(url);
    return response.text();
}

async function combineFiles4(iframeId, headUrl1, headUrl2, bodyUrl) {
    const headContent1 = await loadFile(headUrl1);
    const headContent2 = await loadFile(headUrl2);
    const bodyContent = await loadFile(bodyUrl);

    const iframe = document.getElementById(iframeId);
    const doc = iframe.contentDocument || iframe.contentWindow.document;

    doc.open();
    doc.write(`<!DOCTYPE html><html lang="ca"><head>${headContent1}${headContent2}</head><body>${bodyContent}</body></html>`);
    doc.close();
}

async function combineFiles3(iframeId, headUrl, bodyUrl) {
    const headContent = await loadFile(headUrl);
    const bodyContent = await loadFile(bodyUrl);

    const iframe = document.getElementById(iframeId);
    const doc = iframe.contentDocument || iframe.contentWindow.document;

    doc.open();
    doc.write(`<!DOCTYPE html><html lang="ca"><head>${headContent}</head><body>${bodyContent}</body></html>`);
    doc.close();
}