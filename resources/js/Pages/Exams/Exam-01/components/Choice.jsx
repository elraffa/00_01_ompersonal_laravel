import React from 'react'

const Choice = ({ choice, questionId, handleChoice, currentChoice }) => (
    <div className="mb-2">
      <input
        type="radio"
        name={`question-${questionId}`}
        value={choice.id}
        className="mr-2"
        checked={currentChoice === choice.id}
        onChange={() => handleChoice(questionId, choice.id)}
      />
      <label>{choice.choice_text}</label>
    </div>
  )

export default Choice