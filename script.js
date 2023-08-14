function pairChecker(X) {

    if( typeof(X) !== 'string'){

        console.log('ERROR. Wrong input type.');
        return;

    }


    let pairsElementsList = [];

    const conversionTable = [
        {
            opener:     '{',
            closer:     '}'
        },
        {
            opener:     '(',
            closer:     ')'
        },
        {
            opener:     '[',
            closer:     ']'
        }
    ]

    let openers = '';
    let closers = '';

    for (let i = 0; i < conversionTable.length; i++) {
        openers += conversionTable[i].opener;        
    }

    for (let i = 0; i < conversionTable.length; i++) {
        closers += conversionTable[i].closer;        
    }


    let current;
                      
    for (let i = 0; i < X.length; i++) {
        
        current = X[i];
        
        if ( openers.includes( current ) ) {
            
            pairsElementsList.push(current);
        
        } else if ( closers.includes( current ) ) {
            
            const lastElement = pairsElementsList.pop();

            const pair = conversionTable.find( el => el.opener === lastElement)
            
            if ( pair.closer !== current) {

                return false;

            }

        }
    
    }
    
    return pairsElementsList.length === 0;

}