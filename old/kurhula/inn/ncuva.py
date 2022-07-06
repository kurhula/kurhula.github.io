#author: kurhula.com
#all rights reserved
#musa.baloyi707@gmail.com

import sys

def breadth_of(board):
    return len(board[0])


def player_1(board):
    printer(board)
    breadth = breadth_of(board)
    print "\n" + player1 + "'s Turn"

    row, column = getMove(board, True)
    hand = board[row][column]
    board[row][column] = 0

    while hand > 0:
        row, column = increment1(row, column, breadth)
        hand -= 1
        board[row][column] += 1
        if hand == 1:
            row, column = increment1(row, column, breadth)
            if board[row][column] > 0:
                hand += board[row][column]
                board[row][column] = 0
            elif board[row][column] == 0:
                board[row][column] = 1
                if board[1][column] > 0 and row != 3:
                    board[1][column] = 0
                    board[0][column] = 0
        elif hand == 0:
            while board[row][column] == 2:
                hand = board[row][column]
                board[row][column] = 0
                increment1(row, column, breadth)
                board[row][column] += 1
            if board[row][column] == 1 and board[1][column] > 0 and row != 3:
                board[1][column] = 0
                board[0][column] = 0


def player_2(board):
    printer(board)
    breadth = breadth_of(board)
    print "\n" + player2 + "'s Turn"

    row, column = getMove(board, False)
    hand = board[row][column]
    board[row][column] = 0

    while hand > 0:
        row, column = increment2(row, column, breadth)
        hand -= 1
        board[row][column] += 1
        if hand == 1:
            row, column = increment2(row, column, breadth)
            if board[row][column] > 0:
                hand += board[row][column]
                board[row][column] = 0
            elif board[row][column] == 0:
                board[row][column] = 1
                if board[2][column] > 0 and row != 0:
                    board[3][column] = 0
                    board[2][column] = 0
        elif hand == 0:
            while board[row][column] == 2:
                hand = board[row][column]
                board[row][column] = 0
                increment2(row, column, breadth)
                board[row][column] += 1
            if board[row][column] == 1 and board[2][column] > 0 and row != 0:
                board[3][column] = 0
                board[2][column] = 0


def increment1(row, column, breadth):
    if row == 2 and column != 0:
        column -= 1
    elif row == 3 and column != breadth - 1:
        column += 1
    elif row == 2 and column == 0:
        row = 3
    elif row == 3 and column == breadth - 1:
        row = 2
    return row, column


def increment2(row, column, breadth):
    if row == 0 and column != 0:
        column -= 1
    elif row == 1 and column != breadth - 1:
        column += 1
    elif row == 0 and column == 0:
        row = 1
    elif row == 1 and column == breadth - 1:
        row = 0
    return row, column


def areOnes(is_player1, board):
    for row in range(2, 4) if is_player1 else range(2):
        for column in board[row]:
            if column > 1:
                return False
    return True


def is_invalid_move(board, breadth, row, column, is_player1):
    if column < 0 or column > breadth - 1 or board[row][column] == 0:
        print "\nInvalid move: outside of board."
        return True
    elif board[row][column] == 1 and not areOnes(is_player1, board):
        print "\nInvalid move: you cannot start with a 1 " \
              "when you have holes with 2 or more"
        return True
    elif is_player1 and row < 2 or not is_player1 and row > 1:
        print "\nInvalid move: you cannot be on the opponent side."
        return True
    else:
        return False


def getRow():
    row = input()
    while row == '':
        row = input()
    return row


def getColumn():
    column = input()
    while column == '':
        column = input()
    return column


def is_invalid_move(board, breadth, row, column, is_player1):
    if column < 0 or column > breadth - 1 or board[row][column] == 0:
        print "\nInvalid move: outside of board."
        return True
    elif board[row][column] == 1 and not areOnes(is_player1, board):
        print "\nInvalid move: you cannot start with a 1 " \
              "when you have holes with 2 or more"
        return True
    elif is_player1 and row < 2 or not is_player1 and row > 1:
        print "\nInvalid move: you cannot be on the opponent side."
        return True
    else:
        return False


def getMove(board, is_player1):
    print "Make a move"
    breadth = breadth_of(board)

    row = getRow()
    column = getColumn()

    if is_invalid_move(board, breadth, row, column, is_player1):
        is_invalid_move(board, breadth, row, column, is_player1) == False
        getMove(board, is_player1)

    return row, column


def printer(board):
    print "\n"
    n = 0
    for row in board:
        print str(n) + " " + str(row), " ", str(sum(row))
        n += 1
    print "\n  " + str(range(0, len(row)))


def has_player1_won(board):
    return sum(board[2]) + sum(board[3]) == 0


def has_player2_won(board):
    return sum(board[0]) + sum(board[1]) == 0


def setBoardUp(length, breadth, stones):
    board = [[], [], [], []]
    for row in range(length):
        for column in range(breadth):
            board[row].append(stones)

    board[1][breadth - 2] = 1
    board[1][breadth - 1] = 0
    board[2][0] = 0
    board[2][1] = 1

    if stones == 3:
        board[1][breadth - 3] = 2
        board[2][2] = 2

    return board


def main(breadth, length, stones):

    board = setBoardUp(length, breadth, stones)

    player1_turn = True
    while not (has_player1_won(board) or has_player2_won(board)):
        player_1(board) if player1_turn else player_2(board)
        player1_turn = not player1_turn

    if has_player1_won(board):
        print "\n" + player2 + "WINS!!!"
    if has_player2_won(board):
        print "\n" + player1 + "WINS!!!"

    print "\nGAME OVER!!!"


player1 = sys.argv[1]
player2 = sys.argv[2]

main(10, 4, 2)
